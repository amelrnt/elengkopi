@extends('penjualan.template')
@section('title', 'Transaksi / Create')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card mb-4">
            <div class="card-header"><strong>Menu</strong></div>
            <div class="card-body">


                <div class="example">


                    <div class="menu" style="margin: 10px">

                        <div class="row" style="margin-bottom: 10px">
                            {{-- <label class="form-label" for="menu">Menu - 1</label> --}}
                            <div class="col-md-7">
                                <select name="menu" class="col form-select" required>
                                    <option value="">Pilih Menu</option>
                                    @foreach ($menu as $item)
                                    <option value="{{ $item->id }}" data-harga="{{ $item->harga }}">{{ $item->nama }}
                                    </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-md-2">
                                <input type="number" name="jumlah" value="1" min="1" class="form-control"
                                    placeholder="Jumlah" required>

                            </div>
                            <div class="col-md-2">
                                <input type="number" id="harga" name="harga" class="harga form-control"
                                    placeholder="Harga" disabled>

                            </div>
                            <div class="col-md-1">
                                <button id="delete" type="button" class="btn btn-danger waves-effect waves-light"
                                    onclick="delet()">Delete</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 20px">
                        <button type="button" id="tambah"
                            class="btn btn-primary waves-effect waves-light">Tambah</button>
                    </div>

                </div>

                </form>

                <div class="example">
                    <form action="{{ route('transaksi.store')}} " id="formtransaki" name="formtransaksi" method="POST"
                        enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="input-group mb-3">
                            @php
                            date_default_timezone_set('Asia/Jakarta');
                            @endphp
                            Time: {{ date("Y-m-d h:i") }}
                            @php
                            @endphp
                        </div>
                        <div class="total input-group mb-3">
                            Total Harga : 0
                        </div>
                        <input type="hidden" name="transaksi[]">
                        <input type="hidden" name="detailtransaksi">
                        <input type="hidden" name="qty">
                        <input id="total" name="total" type="hidden" name="total">
                        <button type="submit"
                            class="btn-submit btn btn-primary waves-effect waves-light">Submit</button>
                    </form>

                </div>
            </div>
            <!-- /.card.mb-4-->
        </div>

        {{-- <div class="card mb-4"> --}}
            {{-- <div class="card-header"><strong>Transaksi</strong></div> --}}
            {{-- <div class="card-body"> --}}



                {{-- </div> --}}
            {{-- </div> --}}


    </div>
</div>
</div>
</div>


@endsection
@section('scripts')
<script>
    var i = 1;

    var detail = new Map();
    $(document).ready(function () {
            console.log('ready');

            $('#tambah').on('click', function () {
                console.log('tambah');
                i++;
                var html = '';
                html += '<div class="row" style="margin-bottom:10px">';
                html += '';
                html += '<div class="col-md-7">';
                html += '<select name="menu" class="col form-select" required>';
                html += '<option value="" ">Pilih Menu</option>';
                html += '@foreach ($menu as $item)';
                html += '<option value="{{ $item->id }}" data-harga="{{ $item->harga }}">{{ $item->nama }}</option>';
                html += '@endforeach';
                html += '</select>';
                html += '</div>';
                html += '<div class="col-md-2">';
                html += '<input type="number" name="jumlah" value="1" min="1" class="form-control" placeholder="Jumlah" required>';
                html += '</div>';
                html += '<div class="col-md-2">';
                html += '<input type="number" name="harga"  class="form-control" placeholder="Harga" disabled>';
                html += '</div>';
                html += '<div class="col-md-1">';
                html += '<button id="delete" type="button" class="btn btn-danger waves-effect waves-light" >Delete</button>';
                html += '</div>';
                html += '</div>';
                $('.menu').append(html);
                // updatetotal
            }
            );

        });

        $('.menu').on('click','button#delete' ,function () {
            console.log($(this).closest('tr'));
            $(this).closest('div.row').remove();
            updatetotal();
                       // i--;
            // $('.menu').remove();
        });
        $('.menu').on('change','select' ,function (e) {
            // console.log(e.target.options[e.target.selectedIndex]);
            // console.log($(this).children('option'));
            var menu =  $('option:selected',this).data('harga');
            var idmenu = $(this).val();
            var jumlah =  $(this).parents().find('input[name="jumlah"]').val();
            var harga = getprice(menu,jumlah);

            $(this).closest('div.row').find('input[name="harga"]').val(harga);
            updatetotal();
        });
        $('.menu').on('change','input[name="jumlah"]' ,function () {

            var menu =  $(this).parents().find('select[name="menu"]').find(':selected').data('harga');
            var jumlah = $(this).val();
            var idmenu =  $(this).parents().find('select[name="menu"]').val();
            var harga = getprice(menu,jumlah);
            // console.log(idmenu);
            $(this).closest('div.row').find('input[name="harga"]').val(harga);
            updatetotal();
            $('.menu').each(function(){
                var _menu = $(this).val();
                // var _qty = $(this).parents().find('input[name="jumlah"]').val();
                var _qty = $(this).find('input[name="jumlah"]').val();
                console.log(menu);
                console.log(_qty);
                detail.set(_menu, _qty);
            });
        });

        function getprice(menu, harga) {
            return menu*harga;
        }
        function updatetotal(){
            var total = 0;
            var menu = [];
            var qty = [];
            // var input = $('input[name="detailtransaksi[]"');
            $('.menu').find('input[name="harga"]').each(function(){
                var _detail = new Map();
                total += parseInt($(this).val());
                });
            $('.menu').find('input[name="jumlah"]').each(function(){
                var _detail = new Map();
                _qty = $(this).val();
                qty.push(_qty);
                });
            $('.menu').find('select[name="menu"]').each(function(){
                // var _detail = new Map();
                _menu = $(this).val();
                menu.push(_menu);
                });
            console.log(menu);
            // console.log(JSON.stringify(Object.fromEntries(detail)));
            $('.total').html('Total Harga : Rp. '+total);
            $('.total').val(total);
            $('#total').val(total);
            $('input[name="detailtransaksi"]').val(JSON.stringify(menu));
            $('input[name="qty"]').val(JSON.stringify(qty));
            // $('.menu').find('select[name="menu"]').each(function(){
            //     var _menu = $(this).val();
            //     var _qty = $(this).parents().find('input[name="jumlah"]').val();
            //     console.log(_menu);
            //     console.log(_qty);
            //     detail.set(_menu, _qty);
            //     // menu += parseInt($(this).val());
                // jumlah = $(this).parents().find('input[name="jumlah"]').val()
                // menu.push($(this).children(':selected').val());
                // qty.push(jumlah);
                // detail.set($(this).children(':selected').val(),jumlah);
                // // $('detailtransaksi[]').val(JSON.stringify(menu));

                // console.log(JSON.stringify(detail));
            // });
            // $('input[name="detailtransaksi[]"]').each(function(){
            //     $(this[0]="aa").val("aa");
            //     menu.push();
            // });

            console.log(JSON.stringify(menu));
        }
        $('#formtransaki').on('submit',function (e) {
        // $('.btn-submit').on('click',function (e) {
            // e.preventDefault();
            var cansubmit = false;
            var counter = 0;
            var menu = [];
            formdata = $("form").serialize();


            // $.ajax({
            //     type: "POST",
            //     url: $("form").attr("action"),
            //     data: detail,
            //     data: $("form").serialize(),
            //     dataType: "json",
            //     encode: true,
            // }).done(function (data) {
            //     console.log(data);
            // });
            // $('.menu').find('select[name="menu"]').each(function(){
            //     // menu += parseInt($(this).val());
            //     menu.push($(this).children(':selected').val());
            //     $('#detailtransaksi[]').val(menu);
            //     counter = counter + 1;
            //     callBack();

            // });
            // function callBack() {
            //     if (i === counter) {
            //         // console.log(i);
            //         console.log('All Done')
            //         cansubmit = true;

            //         // $('#formtransaki').removeClass('prevented');
            //         // console.log($('#detailtransaksi[]').submit());
            //         // $('#detailtransaksi[]').val(menu);
            //         // console.log($('#detailtransaksi[]'));
            //         // $(this).submit()
            //         // unbind();
            //         // $('#formtransaki').submit();
            //     }
            // };
            // // console.log($('#detailtransaksi[]'));
            // if (cansubmit) {
            //     // console.log($('#detailtransaksi[]'));
            //     // $(this).unbind('submit').submit();
            //     // $('#formtransaki').submit();

            // }


            // console.log('form submit');
        })

</script>

@endsection
