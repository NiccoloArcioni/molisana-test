@extends('layouts.app')

@section('title', 'HomePage')

@section('content')
    <div class="banner">
        <img src="{{asset('img/molisana-home.jpg')}}" alt="">
    </div>
    <div class="articles_container">
        <div class="panel">
            <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/box-nuove-forme.jpg" alt="">
            <div class="article_layover">
                <svg class="mk-svg-icon" data-name="mk-jupiter-icon-plus-circle" data-cacheid="icon-6093d0dd6370b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z"></path>
                </svg>
                <h3>La Molisana, dove le buone idee prendono nuove forme</h3>
            </div>
        </div>
        <div class="panel articles_flex">
            <div class="panel_articles_4">
                <img src="https://www.lamolisana.it/wp-content/uploads/2020/06/box-home-sfarinati-2020.jpg" alt="">
                <div class="article_layover">
                    <svg class="mk-svg-icon" data-name="mk-jupiter-icon-plus-circle" data-cacheid="icon-6093d0dd6370b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z"></path>
                    </svg>
                    <h3>I nostri 5 sfarinati decorticati a pietra</h3>
                </div>
            </div>
            <div class="panel_articles_4">
                <img src="https://www.lamolisana.it/wp-content/uploads/2020/05/box-home-integrale-2020.jpg" alt="">
                <div class="article_layover">
                    <svg class="mk-svg-icon" data-name="mk-jupiter-icon-plus-circle" data-cacheid="icon-6093d0dd6370b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z"></path>
                    </svg>
                    <h3>Nuovo integrale: ricco di fibre e con più vitamine. Da oggi con grano 100% italiano</h3>
                </div>
            </div>
            <div class="panel_articles_4">
                <img src="https://www.lamolisana.it/wp-content/uploads/2020/05/box-home-timeline-2020.jpg" alt="">
                <div class="article_layover">
                    <svg class="mk-svg-icon" data-name="mk-jupiter-icon-plus-circle" data-cacheid="icon-6093d0dd6370b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z"></path>
                    </svg>
                    <h3>100 Anni di pasta La Molisana</h3>
                </div>
            </div>
            <div class="panel_articles_4">
                <img src="https://www.lamolisana.it/wp-content/uploads/2020/07/box-home-tenacita-certificata.jpg" alt="">
                <div class="article_layover">
                    <svg class="mk-svg-icon" data-name="mk-jupiter-icon-plus-circle" data-cacheid="icon-6093d0dd6370b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z"></path>
                    </svg>
                    <h3>Da oggi la nostra tenacità è certificata</h3>
                </div>
            </div>
        </div>
    </div>
@endsection