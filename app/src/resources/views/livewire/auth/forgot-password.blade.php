<div>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5">
                    @error('loginError')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                        @csrf
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="email" id="forgot_email" name="forgot_email" wire:model="email" required autofocus value="{{old('forgot_email')}}">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button class="button is-primary" type="submit" wire:click="send">Send Recovery E-mail</button>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <a href="{{ route('web.auth.login') }}">Already have an account? Login</a>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <a href="{{ route('web.auth.register') }}">Don't have an account? Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>