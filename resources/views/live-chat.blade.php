<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Live Chat</title>
</head>
<body>
<section style="background-color: #eee;">
    <div class="container py-5">

        <div class="row">

            <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                <h5 class="font-weight-bold mb-3 text-center text-lg-start">Member</h5>

                <div class="card">
                    <div class="card-body">

                        <ul class="list-unstyled mb-0">
                            <li class="p-2 border-bottom" style="background-color: #eee;">
                                <a href="#!" class="d-flex justify-content-between">
                                    <div class="d-flex flex-row">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar"
                                             class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                        <div class="pt-1">
                                            <p class="fw-bold mb-0">John Doe</p>
                                            <p class="small text-muted">Hello, Are you there?</p>
                                        </div>
                                    </div>
                                    <div class="pt-1">
                                        <p class="small text-muted mb-1">Just now</p>
                                        <span class="badge bg-danger float-end">1</span>
                                    </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                    <div class="d-flex flex-row">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar"
                                             class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                        <div class="pt-1">
                                            <p class="fw-bold mb-0">Danny Smith</p>
                                            <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                    <div class="pt-1">
                                        <p class="small text-muted mb-1">5 mins ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                    <div class="d-flex flex-row">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp" alt="avatar"
                                             class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                        <div class="pt-1">
                                            <p class="fw-bold mb-0">Alex Steward</p>
                                            <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                    <div class="pt-1">
                                        <p class="small text-muted mb-1">Yesterday</p>
                                    </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                    <div class="d-flex flex-row">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp" alt="avatar"
                                             class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                        <div class="pt-1">
                                            <p class="fw-bold mb-0">Ashley Olsen</p>
                                            <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                    <div class="pt-1">
                                        <p class="small text-muted mb-1">Yesterday</p>
                                    </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                    <div class="d-flex flex-row">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp" alt="avatar"
                                             class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                        <div class="pt-1">
                                            <p class="fw-bold mb-0">Kate Moss</p>
                                            <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                    <div class="pt-1">
                                        <p class="small text-muted mb-1">Yesterday</p>
                                    </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                    <div class="d-flex flex-row">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                                             class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                        <div class="pt-1">
                                            <p class="fw-bold mb-0">Lara Croft</p>
                                            <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                    <div class="pt-1">
                                        <p class="small text-muted mb-1">Yesterday</p>
                                    </div>
                                </a>
                            </li>
                            <li class="p-2">
                                <a href="#!" class="d-flex justify-content-between">
                                    <div class="d-flex flex-row">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                                             class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                        <div class="pt-1">
                                            <p class="fw-bold mb-0">Brad Pitt</p>
                                            <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                    <div class="pt-1">
                                        <p class="small text-muted mb-1">5 mins ago</p>
                                        <span class="text-muted float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>

            <div class="col-md-6 col-lg-7 col-xl-8">

                <ul class="list-unstyled">
                    <li class="d-flex justify-content-between mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                             class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Brad Pitt</p>
                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between mb-4">
                        <div class="card w-100">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Lara Croft</p>
                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium.
                                </p>
                            </div>
                        </div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                             class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                    </li>
                    <li class="d-flex justify-content-between mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                             class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Brad Pitt</p>
                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between mb-4">
                        <div class="card-body"id="messages"> </div>
                    </li>
                    <form action="javascript:void(0)" method="POST" id="message_form">
                        @csrf
                        <li class="bg-white mb-3">
                            <div class="form-outline">
                                <input class="form-control" name="username" id="username" rows="4" placeholder="user name .....">
                            </div>
                            <br>
                            <div class="form-outline">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="message"></textarea>
                            </div>
                        </li>
                        <button type="submit" id="send_message" class="btn btn-info btn-rounded float-end">Send</button>
                    </form>
                </ul>


            </div>

        </div>

    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
