
<section class="sectiuneTrei">
    <div class="container">

        <div class="row">

            <div class="col">
                <img class="img"
                     src="https://orig00.deviantart.net/c24d/f/2016/171/7/5/justin_bieber_png_by_maarcopngs-da700g3.png"
                />
            </div>

            <div class="col">

                <div class="row" id="div3">
                    @foreach($elements as  $element)

                        <div class="col-6">
                            <img src="{{$element['img']}}"
                                 class="img"/>
                            <h5>{{$element['title']}}</h5>
                            <p>{{$element['description']}}</p>
                        </div>

                    @endforeach



                </div>

            </div>

        </div>
        <div class="row divide">
            <div class="col-8">
                <h1>Lorem ipsun dolor sit amet elit !</h1>
                <h5>Why not try our services today, you won't regret your choice !</h5>
            </div>
            <div class="col-4">
                <input type="button" value="CONTACT US TODAY" class="btn btn-primary btn-lg">
            </div>
        </div>

    </div>


</section>