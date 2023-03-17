@extends('app')

@section('konten')
    <div class="h-screen bg-primary lg:bg-white px-12 flex justify-center items-center p-10 flex-row flex-wrap">
        <div class="h-full overflow-y-auto bg-white justify-center flex flex-col items-center w-[100%] md:w-[70%] lg:w-[50%] rounded-md border-2 lg:border-0 drop-shadow-sm px-12 py-6">
            <div class=" mb-12">
                <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="w-full max-h-44 lg:hidden"
                    alt="Sample image" />
            </div>
            <form class="w-full form-control" action="/proses_login" method="post">
                @csrf
                <h1 class="font-extrabold w-full text-center text-3xl">Login Page</h1>
                <div class="form-control w-full mt-6">
                    <label class="label">
                        <span class="label-text">Username</span>
                    </label>
                    <input name="username" type="text" placeholder="Type here" class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="Type here" class="input input-bordered w-full" />
                </div>
                <button type="submit" class="btn btn-primary w-full mt-12">LOGIN</button>
            </form>
        
        </div>
        <div class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12 hidden lg:flex">
            <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="w-full"
                alt="Sample image" />
        </div>
    </div>
@endsection
