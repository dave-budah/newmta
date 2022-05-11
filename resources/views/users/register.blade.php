<x-base-layout>
    <section id="contact" style="margin-top: 8rem;">
        <div class="container">
            <div class="reg_section">
                <form action="/users" class="auth_form" method="POST">
                    @csrf
                    <h1 class="form_div">Register</h1>
                    <div class="error_message"></div>
                    <div class="form_div">
                        <select id="role" class="form_input" type="text" name="role" id="role">
                            <option value="">Select Role</option>
                            <option value="dealer">Dealer</option>
                            <option value="user">User</option>
                        </select>
                        <label for="role" class="form_label">Select Role</label>
                        @error('role')
                        <small class="error_message">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form_div">
                        <input class="form_input" type="text" name="name" id="name" placeholder=" " value="{{ old('name') }}">
                        <label for="" class="form_label">Name</label>
                        @error('name')
                        <small class="error_message">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form_div">
                        <input class="form_input" type="text" name="email" id="email" placeholder=" " value="{{ old('email') }}">
                        <label for="" class="form_label">Email</label>
                        @error('email')
                        <small class="error_message">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form_div">
                        <input class="form_input" type="text" name="mobile" id="mobile" placeholder=" " value="{{ old('mobile') }}">
                        <label for="" class="form_label">Mobile</label>
                        @error('mobile')
                        <small class="error_message">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form_div">
                        <input class="form_input" type="text" name="whatsapp" id="whatsapp" placeholder=" " value="{{ old('whatsapp') }}">
                        <label for="" class="form_label">Whatsapp</label>
                        @error('whatsapp')
                        <small class="error_message">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form_div">
                        <input class="form_input" type="password" name="password" id="password" placeholder="" value="{{ old('password') }}">
                        <label for="" class="form_label">Password</label>
                        <span><i class="fa fa-eye"></i></span>
                        @error('password')
                        <small class="error_message">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form_div">
                        <input class="form_input" type="password" name="password_confirmation" id="password" placeholder=" ">
                        <label for="" class="form_label">Confirm Password</label>
                        @error('password_confirmation')
                        <small class="error_message">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form_div button">
                        <button type="submit" class="submit_btn">Register</button>
                    </div>
                    <div class="form_footer">
                        <p>Already have an account? <a href="/login">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-base-layout>
