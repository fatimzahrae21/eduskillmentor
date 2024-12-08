{{-- 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Register</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <section class="bg-light">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header text-center-primary text-primary">
                                <h4> <i class="bi bi-book "> </i> eduSkillmentor<span>.</span></h4>
                            </div>
                            <div class="card-body">
                                <h6 class="h3 mb-4 text-center">Create an Account</h6>
                                <form action="{{ route('Formation-details.show', ['id' => $course->id] )}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Your Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="name@company.com" required>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="••••••••" required>
                                        @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" id="terms" class="form-check-input" required>
                                        <label class="form-check-label" for="terms">I accept the <a href="#" class="text-primary">Terms and Conditions</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Create an Account</button>
                                </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    </html>
     --}}