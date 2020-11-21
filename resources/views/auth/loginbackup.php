                      <!-----   Log In Auth   ----->
                      @if (Route::has('login'))
                      @isset($url)
                          <!----------------------------   Student Landing   -------------->
                          @if ($url === "/student")
                              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                  <i class="material-icons">apps</i> {{ Auth::user()->name}}
                              </a>
                              <div class="dropdown-menu dropdown-with-icons">
                                  <a href="{{ url('/student_dashboard') }}" class="dropdown-item"> 
                                      <i class="material-icons">child_care</i> My Dashboard
                                  </a>
                              </div>

                          <!----------------------------   Tutor Landing   -------------->
                          @elseif ($url === "/tutors")
                              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                  <i class="material-icons">apps</i> {{ Auth::guard('lecturer')->user()->Fname }}
                              </a>
                              <div class="dropdown-menu dropdown-with-icons">
                                  <a href="{{ url('/tutor') }}" class="dropdown-item"> 
                                      <i class="material-icons">school</i> My Dashboard
                                  </a>
                              </div>
                          @endif
                      @endisset

                      <!----------------------------   Empty URL Landing   -------------->
                      @empty($url)
                          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                              <i class="material-icons">apps</i> Log In
                          </a>
                          <div class="dropdown-menu dropdown-with-icons">
                              <a href="{{ route('login') }}" class="dropdown-item">
                                  <i class="material-icons">child_care</i> Student
                              </a>
                              <a href="{{ url('/login/tutor') }}" class="dropdown-item">
                                  <i class="material-icons">school</i> Tutor
                              </a>
                          </div>
                      @endempty

                  @else 
                      <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                          <i class="material-icons">apps</i> Log In
                      </a>
                      <div class="dropdown-menu dropdown-with-icons">
                          <a href="{{ route('login') }}" class="dropdown-item">
                              <i class="material-icons">child_care</i> Student
                          </a>
                          <a href="{{ url('/login/tutor') }}" class="dropdown-item">
                              <i class="material-icons">school</i> Tutor
                          </a>
                      </div>
                  @endif
              <!-----   Log In Auth   ----->