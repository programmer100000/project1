var JsDBSource = {
    loadData: function(n) {
        return $.ajax({
            type: "GET",
            dataType: "json",
            url: url_getLiveLog,
            data: n
        });
    },
    insertItem: function(e) {
        return $.ajax({
            type: "POST",
            url: "../assets/data/jsgrid.json",
            data: e
        })
    },
    updateItem: function(e) {
        return $.ajax({
            type: "PUT",
            url: "../assets/data/jsgrid.json",
            data: e
        })
    },
    deleteItem: function(e) {
        return $.ajax({
            type: "DELETE",
            url: "../assets/data/jsgrid.json",
            data: e
        })
    }
};

! function(n) {
    "use strict";

    function e() {
        this.$body = n("body")
    }
    e.prototype.createGrid = function(e, t) {
        e.jsGrid(n.extend({
            height: "550",
            width: "100%",
            filtering: !1,
            editing: !1,
            inserting: !0,
            sorting: !0,
            paging: !0,
            pageLoading: true,
            autoload: !0,
            pageSize: 10,
            pageButtonCount: 5,
            deleteConfirm: "Do you really want to delete the entry?"
        }, t))
    }, e.prototype.init = function() {
        var e = {
            fields: [{
                    name: "ردیف",
                    type: "text",
                    width: 40
                }, {
                    name: "نام دستگاه",
                    type: "text",
                    width: 70
                }, {
                    name: "زمان شروع",
                    type: "text",
                    width: 70
                },
                {
                    name: "زمان پایان",
                    type: "text",
                    width: 70
                },
                {
                    name: "قیمت",
                    type: "text",
                    width: 70
                }
            ],
            rowClick: function(args) {
                console.log(args);
                var getData = args.item;
                var keys = Object.keys(getData);
                var text = [];
            },
            controller: JsDBSource
        };
        this.createGrid(n("#jsGrid"), e)
    }, n.GridApp = new e, n.GridApp.Constructor = e
}(window.jQuery),
function() {
    "use strict";
    window.jQuery.GridApp.init()
}();