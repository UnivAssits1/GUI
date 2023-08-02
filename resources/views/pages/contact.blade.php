@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Starter</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Starter</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

        <section class="mb-4">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center" style="min-height: auto" id="reach">
                    <h1 class="text-center ">Reach Us!</h1>
                    <p class="text-center fs-6">"Jangan ragu untuk menghubungi saya melalui formulir kontak yang disediakan di situs web ini, dan kami akan dengan senang hati menghubungi Anda!"</p>
                    <div class="row">
                        <div class="col-lg-6 align-self-center justify-content-md-center" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true" data-aos-once="false">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.034359931661!2d107.57834147462738!3d-6.886487867385516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6873a8cf5a7%3A0xf8f474dec4efb56!2sUniversitas%20Kristen%20Maranatha!5e0!3m2!1sen!2sid!4v1690977654211!5m2!1sen!2sid" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-lg-6" data-aos="fade-down" data-aos-duration="1000" data-aos-mirror="true" data-aos-once="false">
                            <form id="myForm" name="NewPort">
                                <div class="mb-3">
                                    <label for="Email" class="form-label"> Email</label>
                                    <input type="email" class="form-control" placeholder="Ex : admin@gamil.com" name="email" required />
                                    <div id="emailHelp" class="form-text">&nbsp; I will not share your email</div>
                                </div>
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Fullname</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex : John Doe" required />
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <select id="country" class="form-select" name="country" class="mb-3" required>
                                        <option value="">--- Select Country ---</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Singapura">Singapura</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Negara Lain">Other Country</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="massages1" class="form-label">Message</label>
                                    <textarea class="form-control contact-textarea" id="massages1" rows="5" name="message" placeholder="Ex : Hello World" required></textarea>
                                </div>


                                <style>
                                    .buttonB {
                                        font-family: inherit;
                                        font-size: 20px;
                                        background: #AA998F;
                                        color: white;
                                        padding: 0.7em 1em;
                                        padding-left: 0.9em;
                                        display: flex;
                                        align-items: center;
                                        border: none;
                                        border-radius: 16px;
                                        overflow: hidden;
                                        transition: all 0.2s;
                                    }

                                    .buttonB .spanB {
                                        display: block;
                                        margin-left: 0.3em;
                                        transition: all 0.3s ease-in-out;
                                    }

                                    .buttonB svg {
                                        display: block;
                                        transform-origin: center center;
                                        transition: transform 0.3s ease-in-out;
                                    }

                                    .buttonB:hover .svg-wrapperB {
                                        animation: fly-1 0.6s ease-in-out infinite alternate;
                                    }

                                    .buttonB:hover svg {
                                        transform: translateX(1.2em) rotate(45deg) scale(1.1);
                                    }

                                    .buttonB:hover span {
                                        transform: translateX(5em);
                                    }

                                    .buttonB:active {
                                        transform: scale(0.95);
                                    }

                                    @keyframes fly-1 {
                                        from {
                                            transform: translateY(0.1em);
                                        }

                                        to {
                                            transform: translateY(-0.1em);
                                        }
                                    }


                                </style>

                                <button class="buttonB">
                                    <div class="svg-wrapper-1">
                                        <div class="svg-wrapperB">
                                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="spanB">Send</span>
                                </button>

{{--                                <button type="submit" class="btn-lg"  style="background-color: #AA998F" id="contact-button" data-bs-toggle="modal" data-bs-target="#contact-thx">Kirim--}}
{{--                                </button>--}}

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="modal fade" id="contact-thx" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Thank You</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="contact-modal-thx" src="img/thx.gif" />
                        <h4 class="contact-modal-h4">Your message has been received by the system, the message will be replied to as soon as possible.</h4>
                    </div>
                </div>
            </div>
        </div>
	</div><!-- /.container-fluid -->
</div>

<!-- /.content -->
@endsection
