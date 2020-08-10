var JsDBSource = {
    loadData: function(n) {
        return $.ajax({
            type: "GET",
            dataType: "json",
            url: url_getfactor,
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
                    name: "شماره فاکتور",
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
                var getData = args.item;
                var keys = Object.keys(getData);
                var text = [];
                let factornumber = '';
                $.each(keys, function(idx, value) {
                    if (idx == 1) {
                        factornumber = getData[value];
                    }
                });
                let table_factor_livelogs = $('#table-factor-livelogs');
                let table_factor_buffets = $('#table-factor-buffets');
                table_factor_livelogs.find('tbody').html('');
                table_factor_buffets.find('tbody').html('');
                $.ajax({    
                    type: "POST",
                    url: "/get/factor/info",
                    data: {
                        invoice_num : factornumber
                    }, // serializes the form's elements.
                    success: function(data) {
                        $('#ModalForm').modal('show');

                        let livelogs = data.livelogs;
                        let buffets = data.buffets;
                        let invoice = data.invoice;

                        $('#factor-number').html(invoice.invoice_num);
                        for (let index = 0; index < livelogs.length; index++) {
                            let item = livelogs[index];
                            
                            table_factor_livelogs.find('tbody').append(`
                            <tr>
                                <td>${item.device_name}</td>
                                <td>${item.joystick_count}</td>
                                <td>${item.start_time}</td>
                                <td>${item.end_time}</td>
                                <td>${showMoney(item.price)}</td>
                            </tr>
                        `);
                        }

                        for (let index = 0; index < buffets.length; index++) {
                            let item = buffets[index];
                            table_factor_buffets.find('tbody').append(`
                            <tr>
                                <td>${item.buffet_name}</td>
                                <td>${item.count}</td>
                                <td>${showMoney(item.price)}</td>
                            </tr>
                        `);
                        }
                        table_factor_buffets.closest(".table-responsive").find('p').remove(); 
                        table_factor_buffets.after(`<p>جمع کل : ${showMoney(invoice.price)}</p>`);


                        refresh_tbl_livelogs();
                    },
                    error: function(data) {
                        Swal.fire('خطا', data.responseJSON.message, 'error');
                    }
                });
            },
            controller: JsDBSource
        };
        this.createGrid(n("#jsgrid"), e)
    }, n.GridApp = new e, n.GridApp.Constructor = e
}(window.jQuery),
function() {
    "use strict";
    window.jQuery.GridApp.init()
}();