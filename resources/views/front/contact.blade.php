@extends('front.layouts.master')
@section('content')
    <section class="content" style="padding-bottom: 300px;">
        <div class="iframe mb-5">
            {!! $information->iframe !!}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <div class="news">
                       <h5>Mağaza Bilgilerimiz</h5>
                       <hr>
                       <label>Adres:</label>
                       <p><strong>{{$information->adress}}</strong></p>
                       <label>Telefon:</label>
                       <p><strong>{{$information->telephone}}</strong></p>
                       <label> Şirket Telefon:</label>
                       <p><strong>{{$information->telephone_2}}</strong></p>
                   </div>
                </div>
                <div class="col-md-6">
                    <div class="news" style="width: 95%; margin-left: 43px;">
                        <h4>İletişime Geçin</h4>
                        <hr>
                        <form action="">
                            <div class="form-group">
                                <label>Ad Soyad</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mesaj</label>
                                <textarea  id="" cols="30" rows="6" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success form-control">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
