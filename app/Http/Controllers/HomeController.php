<?php

namespace App\Http\Controllers;

use App\Comment;
use App\favourite;
use App\Game;
use App\Gamenet;
use App\Possibilities;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Rate;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    public function rate(Request $request)
    {
        $gnet_id = $request->input('id');
        $rateval = $request->input('rate');

        $user = Auth::user();
        if (Auth::check() && $user->status_id == 1) {
            $rate = Rate::select()->where([['gnet_id', '=', $gnet_id], ['user_id', '=', $user->user_id]])->first();
            if ($rate == null) {
                $new_rate = new Rate();
                $new_rate->gnet_id = $gnet_id;
                $new_rate->user_id = $user->user_id;
                $new_rate->rate = $rateval;
                if ($new_rate->save()) {
                    $rates = Rate::select()->where('gnet_id', $gnet_id)->get();
                    $rate_count = $rates->count();
                    $totalrate = 0;
                    foreach ($rates as $r) {
                        $totalrate += $r->rate;
                    }
                    $rate = $totalrate / $rate_count;
                    $gamenet = Gamenet::select()->where('gamenet_id', $gnet_id)->first();
                    $gamenet->rate = $rate;
                    if ($gamenet->save()) {
                        return true;
                    }
                } else {
                    return false;
                }
            } else {
                return 'قبلا امتیاز داده اید';
            }
        } else {
            return 'برای امتیاز دادن به گیم نت لطفا وارد شوید';
        }
    }
    public function addtofavourite(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->user_id;
        $gnet_id = $request->input('gamenet_id');

        $request->validate([
            'gamenet_id' => 'required'
        ]);
        if (validator()) {
            if ($user != null) {
                $gamenet = Gamenet::where('gamenet_id', $gnet_id)->first();
                if ($user != null && $gamenet != null) {
                    $favourite = favourite::where([['user_id', $user_id], ['gnet_id', $gnet_id]])->first();
                    if ($favourite == null) {
                        $fav = new favourite();
                        $fav->user_id = $user_id;
                        $fav->gnet_id = $gnet_id;
                        if ($fav->save()) {
                            return true;
                        }
                    }else{
                        $favourite->delete();
                    }
                }
            }
        }
    }
    public function addcomment(Request $request){
        if(Auth::check()){
            $user = Auth::user();
            $gamenet_id = $request->input('gamenet-id');
            $msg = $request->input('comment');
            $comment = new Comment();
            $comment->parent_id = 0 ;
            $comment->msg = $msg;
            $comment->status = 0 ;
            $comment->gnet_id = $gamenet_id;
            $comment->user_id = $user->user_id;
            if($comment->save()){
                return  redirect()->back()->withErrors(['msg' , 'کامنت شما ثبت شد  ']);
            }else{
                return redirect()->back()->withErrors(['msg' , 'خطایی رخ داده  ']);
            }
        }else{
            return redirect()->back()->withErrors(['msg' , 'برای ارسال نظر باید در سایت ثبت نام کنید  ']);
        }
    }
    public function search(Request $request){
        $keyword = $request->input('text');
        $gamenet = Gamenet::where('title' , 'LIKE' , $keyword)->limit(5)->get();
        $games = Game::
        join('gamenets' , 'gamenets.gamenet_id' , '=' , 'gnet_games.gnet_id')
            ->where('game_name' , 'LIKE' , $keyword)->limit(3)->get();
        $emkanat = Possibilities::join('gamenets' , 'gamenets.gamenet_id' , '=' , 'possibilities.gnet_id')
            ->where('text' , 'LIKE', $keyword)->limit(2)->get();
            $gaments = [];
            $game = [];
            $emkan = [];
            foreach($gamenet as $ga){
                $gaments[] = [
                    'title' => $ga->title,
                    'link' => route('show.gamenet' , ['gamenet_id' => $ga->gamenet_id , 'gamenet_name' => $ga->title] )
                ];
            }
            foreach($games as $g){
                $game[]=[
                    'title' => $g->game_name . ' در ' . $g->title ,
                    'link' => route('show.gamenet' , ['gamenet_id' => $g->gamenet_id , 'gamenet_name' => $g->title] )
                ];
            }
            foreach($emkanat as $em){
                $emkan[]=[
                    'title' => $em->text . ' در ' . $em->title ,
                    'link' => route('show.gamenet' , ['gamenet_id' => $em->gamenet_id , 'gamenet_name' => $em->title] )
                ];
            }
                
        $arr = [
                'gamenets' => $gaments,
                'games' => $game,
                'emkanat' => $emkan
            ];
        return json_encode($arr);
    }
    public function gamenetsindex(Request $request){
        $user = Auth::user();
        $city_id = $request->input('cityId');
        $best_gamenet = Gamenet::
        join('gamenet_pictures' , 'gamenet_pictures.gnet_id' , 'gamenets.gamenet_id')->
        orderBy('rate' , 'asc')->where('gamenets.city_id',$city_id)->inRandomOrder()->take(5)->limit(1)->first();
        if(Auth::check()){
            $fav = App\favourite::where([['user_id' ,
                $user->user_id] , ['gnet_id' , $best_gamenet->gamenet_id]])->first();
            if($fav == null){
                $bs_gamenet_button  = '<button type="button" class="btn btn-primary main-form-btn px-4 favourite-button"
                data-url='.route('add.favourite').'
                data-gnet-id='. $best_gamenet->gamenet_id .'
                data-csrf='. Session::token() .'>دنبال کردن</button> ';
            }
            else{
                $bs_gamenet_button  = '<button type="button" class="btn btn-primary main-form-btn px-4 favourite-button"
                data-url='.route('add.favourite').'
                data-gnet-id='. $best_gamenet->gamenet_id .'
                data-csrf='. Session::token() .'>دنبال شده</button> ';
            }
        }
        $gamenets_active = Gamenet::select()
        ->join('gamenet_pictures', 'gamenet_pictures.gnet_id', '=', 'gamenets.gamenet_id')
        ->where([['gamenets.approve' , 1],[ 'gamenet_pictures.flag' , 'main'] ,[ 'gamenets.city_id',$city_id]])->take(4)->get();
        $arr = [
                'best_gamenet' => $best_gamenet,
                'btn_bs' => $bs_gamenet_button,
                'gamenets' => $gamenets_active
        ];
        return json_encode($arr);   
    }
}
