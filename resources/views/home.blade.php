@extends('layout.mainlayout')

@section('title','Home')

@section('main_content')
<div class="container pt-3">
        <div class="text-white text-center mb-5 fixed-bottom">
                    <style>
                        .neonText {
                            font-size: 3rem;
                            animation: flicker 1.5s infinite alternate;   
                            color: #fff;
                            text-shadow:
                            0 0 7px #fff,
                            0 0 10px #fff,
                            0 0 21px #fff,
                            0 0 42px #5271ff,
                            0 0 82px #5271ff,
                            0 0 92px #5271ff,
                            0 0 102px #5271ff,
                            0 0 151px #5271ff;
                        }
                        /* Flickering animation */
                        @keyframes flicker {
    
                        0%, 18%, 22%, 25%, 53%, 57%, 100% {

                        text-shadow:
                        0 0 4px #fff,
                        0 0 11px #fff,
                        0 0 19px #fff,
                        0 0 40px #5271ff,
                        0 0 80px #5271ff,
                        0 0 90px #5271ff,
                        0 0 100px #5271ff,
                        0 0 150px #5271ff;

                        }

                            20%, 24%, 55% {        
                            text-shadow: none;
                        }    
                        } 
                    </style>
                  <a href="/car" class="link-light"><h1 class="neonText">Order Here!</h1></a>
                </div>
              </div>
@endsection 