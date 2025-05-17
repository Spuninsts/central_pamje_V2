<!-- Reviewer Registration Modal -->
<div class="modal fade" id="reviewerRegistrationModal" tabindex="-1" aria-labelledby="reviewerRegistrationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header cen-bg-darkblue text-white">
                <h5 class="modal-title text-white" id="reviewerRegistrationModalLabel">Reviewer Registration</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body cen-bg-darkgrey p-4">
                <form method="POST" action="{{ route('user.register') }}"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_type" value="reviewer">
                    <input type="hidden" name="role" value="reviewer">
                    <input type="hidden" name="user_status" value="pending">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h4>Personal Information</h4>
                            <hr class="cen-hr mb-4">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="reviewer_title" class="form-label">Title</label>
                                <select class="form-select" id="reviewer_title" name="title">
                                    <option value="">Select</option>
                                    <option value="Dr." {{ old('title') == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                    <option value="Prof." {{ old('title') == 'Prof.' ? 'selected' : '' }}>Prof.</option>
                                    <option value="Eng." {{ old('title') == 'Eng.' ? 'selected' : '' }}>Eng.</option>
                                    <option value="Mr." {{ old('title') == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                    <option value="Mrs." {{ old('title') == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                    <option value="Ms." {{ old('title') == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                                    <option value="Miss." {{ old('title') == 'Miss.' ? 'selected' : '' }}>Miss.</option>
                                    <option value="Mx." {{ old('title') == 'Mx.' ? 'selected' : '' }}>Mx.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="reviewer_fname" class="form-label">First Name *</label>
                                <input type="text" class="form-control @error('fname') is-invalid @enderror" id="reviewer_fname" name="fname" value="{{ old('fname') }}" required>
                                @error('fname')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="reviewer_mname" class="form-label">Middle Initial</label>
                                <input type="text" class="form-control" id="reviewer_mname" name="mname" value="{{ old('mname') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="reviewer_lname" class="form-label">Last Name *</label>
                                <input type="text" class="form-control @error('lname') is-invalid @enderror" id="reviewer_lname" name="lname" value="{{ old('lname') }}" required>
                                @error('lname')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviewer_email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="reviewer_email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="reviewer_org_id" class="form-label">Organization/Institution *</label>
                              <input type="text" class="form-control @error('org_id') is-invalid @enderror" id="reviewer_org_id" name="org_id" value="{{ old('org_id') }}" required>
                              @error('org_id')
                              <span class="invalid-feedback">{{ $message }}</span>
                              @enderror
                          </div>
                      </div>
                    </div>

                   <!-- <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviewer_password" class="form-label">Password *</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="reviewer_password" name="password" required>
                                @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <small class="text-muted">Minimum 8 characters</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviewer_password_confirmation" class="form-label">Confirm Password *</label>
                                <input type="password" class="form-control" id="reviewer_password_confirmation" name="password_confirmation" required>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="reviewer_address" class="form-label">Address</label>
                                <textarea class="form-control" id="reviewer_address" name="user_address" rows="3">{{ old('user_address') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="reviewer_org_id" class="form-label">Organization/Institution *</label>
                                <input type="text" class="form-control @error('org_id') is-invalid @enderror" id="reviewer_org_id" name="org_id" value="{{ old('org_id') }}" required>
                                @error('org_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>  -->

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="reviewer_doc" class="form-label">Document Reference</label>
                                <input type="file" class="form-control @error('user_doc') is-invalid @enderror" id="reviewer_doc" name="reviewer_doc">
                                @error('user_doc')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <small class="text-muted">Upload Reference Document for the application</small>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h4>Areas of Expertise</h4>
                            <hr class="cen-hr mb-4">
                            <div class="form-group">
                                <select class="form-select @error('expertise') is-invalid @enderror" id="reviewer_expertise" name="expertise[]" multiple>
                                    <option value="PULMO" {{ (is_array(old('expertise')) && in_array('PULMO', old('expertise'))) ? 'selected' : '' }}>ADULT PULMONARY MEDICINE</option>
                                    <option value="ALLER" {{ (is_array(old('expertise')) && in_array('ALLER', old('expertise'))) ? 'selected' : '' }}>ALLERGOLOGY IMMUNOLOGY</option>
                                    <option value="ANAPAT" {{ (is_array(old('expertise')) && in_array('ANAPAT', old('expertise'))) ? 'selected' : '' }}>ANATOMIC PATHOLOGY</option>
                                    <option value="ANES" {{ (is_array(old('expertise')) && in_array('ANES', old('expertise'))) ? 'selected' : '' }}>ANESTHESIOLOGY</option>
                                    <option value="CARDIO" {{ (is_array(old('expertise')) && in_array('CARDIO', old('expertise'))) ? 'selected' : '' }}>CARDIOLOGY</option>
                                    <option value="EPIDEM" {{ (is_array(old('expertise')) && in_array('EPIDEM', old('expertise'))) ? 'selected' : '' }}>CLINICAL EPIDEMIOLOGY</option>
                                    <option value="CLIN" {{ (is_array(old('expertise')) && in_array('CLIN', old('expertise'))) ? 'selected' : '' }}>CLINICAL NUTRITION</option>
                                    <option value="CLIPAT" {{ (is_array(old('expertise')) && in_array('CLIPAT', old('expertise'))) ? 'selected' : '' }}>CLINICAL PATHOLOGY</option>
                                    <option value="CQI" {{ (is_array(old('expertise')) && in_array('CQI', old('expertise'))) ? 'selected' : '' }}>CLINICAL QUALITY IMPROVEMENT</option>
                                    <option value="COMPMED" {{ (is_array(old('expertise')) && in_array('COMPMED', old('expertise'))) ? 'selected' : '' }}>COMPLEMENTARY MEDICINE</option>
                                    <option value="CRIT" {{ (is_array(old('expertise')) && in_array('CRIT', old('expertise'))) ? 'selected' : '' }}>CRITICAL CARE</option>
                                    <option value="DENSUR" {{ (is_array(old('expertise')) && in_array('DENSUR', old('expertise'))) ? 'selected' : '' }}>DENTISTRY AND ORAL SURGERY</option>
                                    <option value="DERMA" {{ (is_array(old('expertise')) && in_array('DERMA', old('expertise'))) ? 'selected' : '' }}>DERMATOLOGY</option>
                                    <option value="ERMED" {{ (is_array(old('expertise')) && in_array('ERMED', old('expertise'))) ? 'selected' : '' }}>EMERGENCY MEDICINE</option>
                                    <option value="ENDOC" {{ (is_array(old('expertise')) && in_array('ENDOC', old('expertise'))) ? 'selected' : '' }}>ENDOCRINOLOGY</option>
                                    <option value="GASTRO" {{ (is_array(old('expertise')) && in_array('GASTRO', old('expertise'))) ? 'selected' : '' }}>GASTROENTEROLOGY</option>
                                    <option value="GENPRACT" {{ (is_array(old('expertise')) && in_array('GENPRACT', old('expertise'))) ? 'selected' : '' }}>GENERAL PRACTITIONER</option>
                                    <option value="GERIA" {{ (is_array(old('expertise')) && in_array('GERIA', old('expertise'))) ? 'selected' : '' }}>GERIATRIC MEDICINE</option>
                                    <option value="HEMA" {{ (is_array(old('expertise')) && in_array('HEMA', old('expertise'))) ? 'selected' : '' }}>HEMATOLOGY</option>
                                    <option value="HBOT" {{ (is_array(old('expertise')) && in_array('HBOT', old('expertise'))) ? 'selected' : '' }}>HYPERBARIC OXYGEN THERAPY</option>
                                    <option value="INDI" {{ (is_array(old('expertise')) && in_array('INDI', old('expertise'))) ? 'selected' : '' }}>INFECTIOUS DISEASE AND TROPICAL MEDICINE</option>
                                    <option value="INTMED" {{ (is_array(old('expertise')) && in_array('INTMED', old('expertise'))) ? 'selected' : '' }}>INTERNAL MEDICINE</option>
                                    <option value="LEMED" {{ (is_array(old('expertise')) && in_array('LEMED', old('expertise'))) ? 'selected' : '' }}>LEGAL MEDICINE AND JURISPRUDENCE</option>
                                    <option value="MEDETH" {{ (is_array(old('expertise')) && in_array('MEDETH', old('expertise'))) ? 'selected' : '' }}>MEDICAL ETHICS</option>
                                    <option value="ONCO" {{ (is_array(old('expertise')) && in_array('ONCO', old('expertise'))) ? 'selected' : '' }}>MEDICAL ONCOLOGY</option>
                                    <option value="NEPHRO" {{ (is_array(old('expertise')) && in_array('NEPHRO', old('expertise'))) ? 'selected' : '' }}>NEPHROLOGY</option>
                                    <option value="NUERO" {{ (is_array(old('expertise')) && in_array('NUERO', old('expertise'))) ? 'selected' : '' }}>NEUROLOGY</option>
                                    <option value="NUSCI" {{ (is_array(old('expertise')) && in_array('NUSCI', old('expertise'))) ? 'selected' : '' }}>NEUROSCIENCES</option>
                                    <option value="NEUSUR" {{ (is_array(old('expertise')) && in_array('NEUSUR', old('expertise'))) ? 'selected' : '' }}>NEUROSURGERY</option>
                                    <option value="NUCMED" {{ (is_array(old('expertise')) && in_array('NUCMED', old('expertise'))) ? 'selected' : '' }}>NUCLEAR MEDICINE</option>
                                    <option value="OBGYNE" {{ (is_array(old('expertise')) && in_array('OBGYNE', old('expertise'))) ? 'selected' : '' }}>OBSTETRICS GYNECOLOGY</option>
                                    <option value="ONCOL" {{ (is_array(old('expertise')) && in_array('ONCOL', old('expertise'))) ? 'selected' : '' }}>ONCOLOGY</option>
                                    <option value="OPHTHA" {{ (is_array(old('expertise')) && in_array('OPHTHA', old('expertise'))) ? 'selected' : '' }}>OPHTHALMOLOGY</option>
                                    <option value="ORGTRAN" {{ (is_array(old('expertise')) && in_array('ORGTRAN', old('expertise'))) ? 'selected' : '' }}>ORGAN TRANSPLANT</option>
                                    <option value="ORSUR" {{ (is_array(old('expertise')) && in_array('ORSUR', old('expertise'))) ? 'selected' : '' }}>ORTHOPEDIC SURGERY</option>
                                    <option value="OTORHI" {{ (is_array(old('expertise')) && in_array('OTORHI', old('expertise'))) ? 'selected' : '' }}>OTORHINOLARYNGOLOGY AND HEAD AND NECK SURGERY</option>
                                    <option value="PAINMED" {{ (is_array(old('expertise')) && in_array('PAINMED', old('expertise'))) ? 'selected' : '' }}>PAIN MANAGEMENT</option>
                                    <option value="PARAMED" {{ (is_array(old('expertise')) && in_array('PARAMED', old('expertise'))) ? 'selected' : '' }}>PARAMEDICAL</option>
                                    <option value="PATHO" {{ (is_array(old('expertise')) && in_array('PATHO', old('expertise'))) ? 'selected' : '' }}>PATHOLOGY</option>
                                    <option value="PEDIA" {{ (is_array(old('expertise')) && in_array('PEDIA', old('expertise'))) ? 'selected' : '' }}>PEDIATRICS</option>
                                    <option value="REHAB" {{ (is_array(old('expertise')) && in_array('REHAB', old('expertise'))) ? 'selected' : '' }}>PHYSICAL MEDICINE AND REHABILITATION</option>
                                    <option value="PLAS" {{ (is_array(old('expertise')) && in_array('PLAS', old('expertise'))) ? 'selected' : '' }}>PLASTIC & RECONSTRUCTIVE SURGERY</option>
                                    <option value="PSYCH" {{ (is_array(old('expertise')) && in_array('PSYCH', old('expertise'))) ? 'selected' : '' }}>PSYCHIATRY</option>
                                    <option value="PSYCHO" {{ (is_array(old('expertise')) && in_array('PSYCHO', old('expertise'))) ? 'selected' : '' }}>PSYCHOLOGY</option>
                                    <option value="PULMED" {{ (is_array(old('expertise')) && in_array('PULMED', old('expertise'))) ? 'selected' : '' }}>PULMONARY MEDICINE</option>
                                    <option value="RADONCO" {{ (is_array(old('expertise')) && in_array('RADONCO', old('expertise'))) ? 'selected' : '' }}>RADIATION ONCOLOGY</option>
                                    <option value="RADIO" {{ (is_array(old('expertise')) && in_array('RADIO', old('expertise'))) ? 'selected' : '' }}>RADIOLOGY</option>
                                    <option value="RHEU" {{ (is_array(old('expertise')) && in_array('RHEU', old('expertise'))) ? 'selected' : '' }}>RHEUMATOLOGY</option>
                                    <option value="GENSUR" {{ (is_array(old('expertise')) && in_array('GENSUR', old('expertise'))) ? 'selected' : '' }}>SURGERY</option>
                                    <option value="URO" {{ (is_array(old('expertise')) && in_array('URO', old('expertise'))) ? 'selected' : '' }}>UROLOGY</option>
                                    <option value="VASCU" {{ (is_array(old('expertise')) && in_array('VASCU', old('expertise'))) ? 'selected' : '' }}>VASCULAR MEDICINE</option>
                                </select>
                                @error('expertise')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <small class="text-muted">Hold Ctrl (or Cmd on Mac) to select multiple areas</small>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" id="reviewer_terms" name="terms" {{ old('terms') ? 'checked' : '' }} required>
                                <label class="form-check-label" for="reviewer_terms">
                                    I agree to the <a href="#" class="cen-font-darkblue cen-link-hover-blue">Terms and Conditions</a> and <a href="#" class="cen-font-darkblue cen-link-hover-blue">Privacy Policy</a>
                                </label>
                                @error('terms')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn cen-btn-darkblue text-white ms-2">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Editor Registration Modal -->
<div class="modal fade" id="editorRegistrationModal" tabindex="-1" aria-labelledby="editorRegistrationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header cen-bg-darkblue text-white">
                <h5 class="modal-title text-white" id="editorRegistrationModalLabel">Editor Registration</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body cen-bg-darkgrey p-4">
                <form method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_type" value="editor">
                    <input type="hidden" name="role" value="editor">
                    <input type="hidden" name="user_status" value="pending">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h4>Personal Information</h4>
                            <hr class="cen-hr mb-4">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="editor_title" class="form-label">Title</label>
                                <select class="form-select" id="editor_title" name="title">
                                    <option value="">Select</option>
                                    <option value="Dr." {{ old('title') == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                    <option value="Prof." {{ old('title') == 'Prof.' ? 'selected' : '' }}>Prof.</option>
                                    <option value="Mr." {{ old('title') == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                    <option value="Mrs." {{ old('title') == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                    <option value="Ms." {{ old('title') == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="editor_fname" class="form-label">First Name *</label>
                                <input type="text" class="form-control @error('fname') is-invalid @enderror" id="editor_fname" name="fname" value="{{ old('fname') }}" required>
                                @error('fname')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="editor_mname" class="form-label">Middle Initial</label>
                                <input type="text" class="form-control" id="editor_mname" name="mname" value="{{ old('mname') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="editor_lname" class="form-label">Last Name *</label>
                                <input type="text" class="form-control @error('lname') is-invalid @enderror" id="editor_lname" name="lname" value="{{ old('lname') }}" required>
                                @error('lname')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="editor_email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="editor_email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="editor_org_id" class="form-label">Organization/Institution *</label>
                                <input type="text" class="form-control @error('org_id') is-invalid @enderror" id="editor_org_id" name="org_id" value="{{ old('org_id') }}" required>
                                @error('org_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

{{--                    <div class="row mb-3">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="editor_password" class="form-label">Password *</label>--}}
{{--                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="editor_password" name="password" required>--}}
{{--                                @error('password')--}}
{{--                                <span class="invalid-feedback">{{ $message }}</span>--}}
{{--                                @enderror--}}
{{--                                <small class="text-muted">Minimum 8 characters</small>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="editor_password_confirmation" class="form-label">Confirm Password *</label>--}}
{{--                                <input type="password" class="form-control" id="editor_password_confirmation" name="password_confirmation" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mb-3">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="editor_address" class="form-label">Address</label>--}}
{{--                                <textarea class="form-control" id="editor_address" name="user_address" rows="3">{{ old('user_address') }}</textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                  {{--  <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="editor_org_id" class="form-label">Organization/Institution *</label>
                                <input type="text" class="form-control @error('org_id') is-invalid @enderror" id="editor_org_id" name="org_id" value="{{ old('org_id') }}" required>
                                @error('org_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div> --}}

{{--                    <div class="row mb-4">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="editor_photo" class="form-label">Profile Photo</label>--}}
{{--                                <input type="file" class="form-control @error('user_photo') is-invalid @enderror" id="editor_photo" name="user_photo">--}}
{{--                                @error('user_photo')--}}
{{--                                <span class="invalid-feedback">{{ $message }}</span>--}}
{{--                                @enderror--}}
{{--                                <small class="text-muted">Upload a professional photo (JPG, PNG, max 2MB)</small>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="reviewer_doc" class="form-label">Document Reference</label>
                                <input type="file" class="form-control @error('user_doc') is-invalid @enderror" id="reviewer_doc" name="reviewer_doc">
                                @error('user_doc')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <small class="text-muted">Upload Reference Document for the application</small>
                            </div>
                        </div>
                    </div>



                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h4>Editorial Information</h4>
                            <hr class="cen-hr mb-4">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="editor_specialty" class="form-label">Primary Specialty *</label>
                                <select class="form-select @error('specialty') is-invalid @enderror" id="editor_specialty" name="specialty" required>
                                    <option value="">Select Specialty</option>
                                    <option value="Clinical Medicine" {{ old('specialty') == 'Clinical Medicine' ? 'selected' : '' }}>Clinical Medicine</option>
                                    <option value="Public Health" {{ old('specialty') == 'Public Health' ? 'selected' : '' }}>Public Health</option>
                                    <option value="Biomedical Sciences" {{ old('specialty') == 'Biomedical Sciences' ? 'selected' : '' }}>Biomedical Sciences</option>
                                    <option value="Health Policy" {{ old('specialty') == 'Health Policy' ? 'selected' : '' }}>Health Policy</option>
                                    <option value="Medical Education" {{ old('specialty') == 'Medical Education' ? 'selected' : '' }}>Medical Education</option>
                                    <option value="Other" {{ old('specialty') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('specialty')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                                                                                                                                                                                                                                                                                                                                    <label for="editor_position" class="form-label">Academic Position *</label>
                                <select class="form-select @error('position') is-invalid @enderror" id="editor_position" name="position" required>
                                    <option value="">Select Position</option>
                                    <option value="Professor" {{ old('position') == 'Professor' ? 'selected' : '' }}>Professor</option>
                                    <option value="Associate Professor" {{ old('position') == 'Associate Professor' ? 'selected' : '' }}>Associate Professor</option>
                                    <option value="Assistant Professor" {{ old('position') == 'Assistant Professor' ? 'selected' : '' }}>Assistant Professor</option>
                                    <option value="Lecturer" {{ old('position') == 'Lecturer' ? 'selected' : '' }}>Lecturer</option>
                                    <option value="Research Fellow" {{ old('position') == 'Research Fellow' ? 'selected' : '' }}>Research Fellow</option>
                                    <option value="Department Chair" {{ old('position') == 'Department Chair' ? 'selected' : '' }}>Department Chair</option>
                                    <option value="Other" {{ old('position') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('position')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="editor_experience" class="form-label">Editorial Experience *</label>
                                <textarea class="form-control @error('experience') is-invalid @enderror" id="editor_experience" name="experience" rows="3" required>{{ old('experience') }}</textarea>
                                @error('experience')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <small class="text-muted">Briefly describe your previous editorial experience</small>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h4>Areas of Expertise</h4>
                            <hr class="cen-hr mb-4">
                            <div class="form-group">
                                <select class="form-select @error('expertise') is-invalid @enderror" id="editor_expertise" name="expertise[]" multiple>
                                    <option value="Medicine" {{ (is_array(old('expertise')) && in_array('Medicine', old('expertise'))) ? 'selected' : '' }}>Medicine</option>
                                    <option value="Public Health" {{ (is_array(old('expertise')) && in_array('Public Health', old('expertise'))) ? 'selected' : '' }}>Public Health</option>
                                    <option value="Epidemiology" {{ (is_array(old('expertise')) && in_array('Epidemiology', old('expertise'))) ? 'selected' : '' }}>Epidemiology</option>
                                    <option value="Biostatistics" {{ (is_array(old('expertise')) && in_array('Biostatistics', old('expertise'))) ? 'selected' : '' }}>Biostatistics</option>
                                    <option value="Clinical Research" {{ (is_array(old('expertise')) && in_array('Clinical Research', old('expertise'))) ? 'selected' : '' }}>Clinical Research</option>
                                    <option value="Health Policy" {{ (is_array(old('expertise')) && in_array('Health Policy', old('expertise'))) ? 'selected' : '' }}>Health Policy</option>
                                    <option value="Global Health" {{ (is_array(old('expertise')) && in_array('Global Health', old('expertise'))) ? 'selected' : '' }}>Global Health</option>
                                    <option value="Medical Ethics" {{ (is_array(old('expertise')) && in_array('Medical Ethics', old('expertise'))) ? 'selected' : '' }}>Medical Ethics</option>
                                </select>
                                @error('expertise')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                <small class="text-muted">Hold Ctrl (or Cmd on Mac) to select multiple areas</small>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" id="editor_terms" name="terms" {{ old('terms') ? 'checked' : '' }} required>
                                <label class="form-check-label" for="editor_terms">
                                    I agree to the <a href="#" class="cen-font-darkblue cen-link-hover-blue">Terms and Conditions</a> and <a href="#" class="cen-font-darkblue cen-link-hover-blue">Privacy Policy</a>
                                </label>
                                @error('terms')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn cen-btn-darkblue text-white ms-2">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
