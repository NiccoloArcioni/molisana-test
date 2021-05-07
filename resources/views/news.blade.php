@extends('layouts.app')

@section('title', 'News')

@section('content')
    <div class="news_title">
        <h2>NEWS E APPROFONDIMENTI DAL MONDO LA MOLISANA</h2>
    </div>
    <div id="news" class="card_container">
        <div class="card news_card">
            <img src="https://www.lamolisana.it/wp-content/uploads/bfi_thumb/grano-cover-p6prp9u9vp29kpg0xkj8x4vajvk48zoa3zxr7qud9o.jpg" alt="">
            <div class="news_overlay">
                <span class="date">05/05/2021</span>
                <p>Cassa Depositi e Prestiti, Intesa Sanpaolo, MIPAAFe La Molisana insieme per il nuov contratto di filiera dedicato al settore cerealico</p>
                <a class="btn">READ MORE</a>
            </div>
        </div>
        <div class="card news_card">
            <img src="https://www.lamolisana.it/wp-content/uploads/bfi_thumb/solidarieta-cover-p6pqwixyv3pki179sn705w0sin8zu8jt5po5u3gtkc.jpg" alt="">
            <div class="news_overlay">
                <span class="date">24/04/2012</span>
                <p>Cinquemila chili di pasta La Molisana al banco alimentare della Lombardia</p>
                <a class="btn">READ MORE</a>
            </div>
        </div>
        <div class="card news_card">
            <img src="https://www.lamolisana.it/wp-content/uploads/bfi_thumb/ansmes-news-p4lnqnckc27zf1ju7zcw9qy8hes9ku6684u5v1bd7w.jpg" alt="">
            <div class="news_overlay">
                <span class="date">22/03/2021</span>
                <p>ANSMeS e La Molisana donano 500 chili di pasta alla Casa Santa Marta in Vaticano</p>
                <a class="btn">READ MORE</a>
            </div>
        </div>
        <div class="card news_card">
            <img src="https://www.lamolisana.it/wp-content/uploads/bfi_thumb/ricetta-vizzarri-articolo-1-p40t3ewk7bg8bob1xjgaxgu7jyv9v6sx7jhxnyxnsc.jpg" alt="">
            <div class="news_overlay">
                <span class="date">10/03/2021</span>
                <p>“Geometrie del Molise” di Nicola Vizzarri è il piatto vincitore del contest “Migliore chef d’Italia”</p>
                <a class="btn">READ MORE</a>
            </div>
        </div>
        <div class="card news_card">
            <img src="https://www.lamolisana.it/wp-content/uploads/bfi_thumb/gemelli-insieme-in-salute-cover-p1eew7hw5lryoh0olz33ytwq5jiydpilchoxrkkazw.jpg" alt="">
            <div class="news_overlay">
                <span class="date">08/03/2012</span>
                <p>Proseguono i webinar organizzati da Gemelli Molise, domani si parlerà dei tumori femminili</p>
                <a class="btn">READ MORE</a>
            </div>
        </div>
        <div class="card news_card">
            <img src="https://www.lamolisana.it/wp-content/uploads/bfi_thumb/solodalcuore-p4072fc8hzwrmm5zf9lzw2pu2lel3rp2im67d8pf3g.jpg" alt="">
            <div class="news_overlay">
                <span class="date">08/03/2021</span>
                <p>#solodalcuore, Rossella Ferro testimonial del progetto benefico</p>
                <a class="btn">READ MORE</a>
            </div>
        </div>
    </div>
@endsection