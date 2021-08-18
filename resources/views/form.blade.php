<!DOCTYPE html>
<html>

<head>
    <title>Resume | contact</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/form.css">
</head>

<body>
    <div class="container">
        <h1 class="brand">
            Contact me
        </h1>
        <div class="wrapper animate__animated animate__wobble">
            <div class="company-info">
                <h1>Ifeoluwa Contact form</h1>
                <ul>
                    <li><i class="fa-road fa"></i> 26 Adeosun street</li>
                    <li><i class="fa-phone fa"></i> 09028849304</li>
                    <li><i class="fa-envelope fa"></i> ifeoluwaolubo@gmail.com</li>
                </ul>
            </div>
            <div class="contact">
                <h3>Email Me</h3>

                @if(session()->has('message'))
                <div class="success-message">
                    {{ session()->get('message') }}
                </div>
                @endif

                <form action="{{ route('contact') }}" method="post">
                    @csrf
                    <p>
                        <label>Name</label>
                        @error('name')
                        <span class="err">{{ $message }}</span>
                        @enderror
                        <input type="text" value="{{ old('name') }}" name="name">
                    </p>
                    <p>
                        <label>Company</label>
                        @error('company')
                        <span class="err">{{ $message }}</span>
                        @enderror
                        <input type="text" value="{{ old('company') }}" name="company">
                    </p>
                    <p>
                        <label>Email Address</label>
                        @error('email')
                        <span class="err">{{ $message }}</span>
                        @enderror
                        <input type="email" value="{{ old('email') }}" name="email">
                    </p>
                    <p>
                        <label>Phone Number</label>
                        @error('phone')
                        <span class="err">{{ $message }}</span>
                        @enderror
                        <input type="text" value="{{ old('phone') }}" name="phone">
                    </p>
                    <p class="full">
                        <label>Message</label>
                        @error('message')
                        <span class="err">{{ $message }}</span>
                        @enderror
                        <textarea name="message" rows="5"> {{ old('message') }}</textarea>
                    </p>
                    <p class="full">
                        <button type="submit">Submit</button>
                    </p>
                </form>
            </div>
        </div>

        <div class="contact-me">
            <a href="{{ route('resume') }}">View Resume</a>
        </div>
    </div>
</body>

</html>