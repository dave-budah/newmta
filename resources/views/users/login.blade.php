<x-base-layout>
    <section id="contact" style="margin-top: 3rem;">
        <div class="container">
            <div class="login_section">
                <form action="/users/authenticate" method="post" class="auth_form">
                    @csrf
                    <h1 class="form_div">Sign In</h1>

                    <div class="form_div">
                        <input class="form_input" type="text" name="email" id="email" placeholder="" value="{{ old('email') }}">
                        <label for="" class="form_label">Email</label>
                        @error('email')
                        <small class="error_message">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form_div">
                        <input class="form_input" type="password" name="password" id="password" placeholder="">
                        <label for="" class="form_label">Password</label>
                        <span><i class="fa fa-eye"></i></span>
                        @error('password')
                        <small class="error_message">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form_div button">
                        <button class="submit_btn" type="submit">Login</button>
                    </div>
                    <div class="form_footer">
                        <p>Don't have an account? <a href="/register">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-base-layout>
