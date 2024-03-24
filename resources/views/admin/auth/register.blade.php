<x-admin-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary">
                        <h4 class="text-white">Register</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name">Name</label>
                                <label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" />
                                </label>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
                                </label>
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <label>
                                    <input type="password" name="password" class="form-control" />
                                </label>
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <label>
                                    <input type="password" name="password_confirmation" class="form-control" />
                                </label>
                                @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary w-100">Register</button>
                                <div class="mt-3">
                                    <a href="{{ route('admin.login') }}">Already registerd?</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
