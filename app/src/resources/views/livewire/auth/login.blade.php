<div>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5">
                    @if(!empty($error) && $error !== "")
                        <div class="notification is-danger">
                            {{ $error }}
                        </div>
                    @endif
                        @csrf
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="email" id="login_email" name="login_email" wire:model="email" required autofocus value="{{old('login_email')}}">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input class="input" type="password" id="login_password" name="login_password" wire:model="password" wire:keydown.enter="login" required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" wire:model="remember">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button
                                    class="button is-primary"
                                    type="submit"
                                    wire:click="login"
                                    wire:keydown.enter="login"
                                >Login</button>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <a href="{{ route('forgot-password') }}">Forgot your password?</a>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <a href="{{ route('register') }}">Don't have an account? Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>