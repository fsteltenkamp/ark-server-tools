<div>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5">
                    @error('registerError')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                        @csrf
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="email" id="register_email" name="register_email" wire:model.live="email" required autofocus value="{{old('register_email')}}">
                            </div>
                            @if(!empty($email))
                            <div class="control" style="border: 1px solid #dbdbdb; padding: 10px;border-top: none;">
                                <ul>
                                    <li>
                                        <x-condition :condition="$email_condition_valid" message="Valid email address"/>
                                    </li>
                                <li>
                            </div>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input class="input" type="password" id="register_password" name="register_password" wire:model.live="password" required>
                            </div>
                            @if (!empty($password))
                            <div class="control" style="border: 1px solid #dbdbdb; padding: 10px;border-top: none;">
                                <ul>
                                    <li>
                                        <x-condition :condition="$password_condition_length" message="At least 8 characters"/>
                                    </li>
                                    <li>
                                        <x-condition :condition="$password_condition_uppercase" message="At least one uppercase letter"/>
                                    </li>
                                    <li>
                                        <x-condition :condition="$password_condition_lowercase" message="At least one lowercase letter"/>
                                    </li>
                                    <li>
                                        <x-condition :condition="$password_condition_number" message="At least one number"/>
                                    </li>
                                    <li>
                                        <x-condition :condition="$password_condition_special" message="At least one special character"/>
                                    </li>
                                </ul>
                            </div>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">Repeat Password</label>
                            <div class="control">
                                <input class="input" type="password" id="register_password_repeat" name="register_password_repeat" wire:model.live="password_repeat" required>
                            </div>
                            @if(!empty($password_repeat))
                            <div class="control" style="border: 1px solid #dbdbdb; padding: 10px;border-top: none;">
                                <ul>
                                    <li>
                                        <x-condition :condition="$password_repeat_condition_same" message="Passwords match"/>
                                    </li>
                                </ul>
                            </div>
                            @endif
                        </div>

                        <div class="field">
                            <div class="control">
                                <button class="button is-primary" type="submit" wire:click="register">Register</button>
                            </div>
                        </div>
                        
                        <div class="field">
                            <div class="control">
                                <a href="{{ route('login') }}">Already have an account? Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>