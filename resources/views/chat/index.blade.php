@extends('layouts.app')
@php($online = 0)
@section('content')
    <div class="container shadow-sm my-5 p-5">
        @foreach($users as $user)
            <!-- Buttons trigger collapse -->
            <a class="btn btn-dark btn-lg btn-block mb-2 bg-darker" data-mdb-toggle="collapse" href="#collapseExample"
               role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="d-flex justify-content-between align-items-center">
                    <span>
                        @if($user->isOnline())
                            &#128994;
                        @else
                            &#128308;
                        @endif
                        {{ $user->name }}
                    </span>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </a>

            <!-- Collapsed content -->
            <div class="collapse mt-3" id="collapseExample">
                <div class="card bg-darker" id="chat4">
                    <div class="card-body" data-mdb-perfect-scrollbar="true"
                         style="position: relative; height: 400px; overflow-y: scroll">

                        <div class="d-flex flex-row justify-content-start">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                                <p class="small p-2 ms-3 mb-1 rounded-3 text-white bg-dark">Hi</p>
                                <p class="small p-2 ms-3 mb-1 rounded-3 text-white bg-dark">How are you
                                    ...???</p>
                                <p class="small p-2 ms-3 mb-1 rounded-3 text-white bg-dark">What are you
                                    doing
                                    tomorrow? Can we come up a bar?</p>
                                <p class="small ms-3 mb-3 rounded-3 text-muted">23:58</p>
                            </div>
                        </div>

                        <div class="row my-3 text-center d-flex justify-content-center">
                            <hr class="hr col-md-5 col-sm-4 col-4 my-auto bg-secondary">
                            <span class="col-md-2 col-sm-4 col-3 text-secondary">{{ __('Today') }}</span>
                            <hr class="hr col-md-5 col-sm-4 col-4 my-auto bg-secondary">
                        </div>

                        <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                            <div>
                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Hiii, I'm good.</p>
                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">How are you doing?</p>
                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Long time no see! Tomorrow
                                    office. will
                                    be free on sunday.</p>
                                <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:06</p>
                            </div>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                        </div>

                        <div class="d-flex flex-row justify-content-start mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Okay</p>
                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">We will go
                                    on
                                    Sunday?</p>
                                <p class="small ms-3 mb-3 rounded-3 text-muted">00:07</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-end mb-4">
                            <div>
                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">That's awesome!</p>
                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">I will meet you Sandon
                                    Square
                                    sharp at
                                    10 AM</p>
                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">Is that okay?</p>
                                <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:09</p>
                            </div>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                        </div>

                        <div class="d-flex flex-row justify-content-start mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Okay i will
                                    meet
                                    you on
                                    Sandon Square</p>
                                <p class="small ms-3 mb-3 rounded-3 text-muted">00:11</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-end mb-4">
                            <div>
                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">Do you have pictures of
                                    Matley
                                    Marriage?</p>
                                <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:11</p>
                            </div>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                        </div>

                        <div class="d-flex flex-row justify-content-start mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Sorry I
                                    don't
                                    have. i
                                    changed my phone.</p>
                                <p class="small ms-3 mb-3 rounded-3 text-muted">00:13</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <div>
                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">Okay then see you on
                                    sunday!!
                                </p>
                                <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:15</p>
                            </div>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                 alt="avatar 1" style="width: 45px; height: 100%;">
                        </div>

                    </div>
                    <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                             alt="avatar 3" style="width: 40px; height: 100%;">
                        <input type="text" class="form-control form-control-lg" id="exampleFormControlInput3"
                               placeholder="Type message">
                        <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                        <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                        <a class="ms-3 link-info" href="#!" onclick="sendMessage()"><i class="fas fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        async function sendMessage(){
            let mess = $('#exampleFormControlInput3').val()
            console.log(mess)
            let encrypted = CryptoJS.AES.encrypt(mess,"C*F)J@NcRfUjXn2r")
            console.log(encrypted.toString())
            let request = await fetch('{{route('messages.store')}}',{
                method: 'POST', // *GET, POST, PUT, DELETE, etc.
                mode: 'cors', // no-cors, *cors, same-origin
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                credentials: 'same-origin', // include, *same-origin, omit
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                },
                redirect: 'follow', // manual, *follow, error
                referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
                body: JSON.stringify({
                    "message" : `${encrypted.toString()}`
                }) // body data type must match "Content-Type" header
            })
            let response = await request.json()
            console.log(response.message)
            console.log(CryptoJS.AES.decrypt(response.message,'C*F)J@NcRfUjXn2r').toString(CryptoJS.enc.Utf8))
        }
    </script>
@endsection