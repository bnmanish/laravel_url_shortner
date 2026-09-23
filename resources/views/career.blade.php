@extends('layouts.app')
@section('title', 'Knot — Shorten, brand, and track every link')
@section('meta_description', 'Knot — Shorten, brand, and track every link')
@section('content')
    {{-- Page-specific CSS --}}
    @push('styles')
        <style>
            /*    .page-title {
                color: #0d6efd;
                font-weight: 700;
            }*/
        </style>
    @endpush
    <div class="carrier-page py-5">
        <h2>Join the Knot Team</h2>
        <p class="page-subtitle">We're building the best free link management platform. Help us keep it free, open, and
            community-driven.</p>

        <div class="row gy-4 mb-5">
            <div class="col-md-4">
                <div class="stat-tile text-center card-lift">
                    <div class="feature-icon rope mx-auto mb-3" style="width:56px;height:56px;margin:0 auto 1rem;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24"
                            height="24">
                            <rect x="3" y="3" width="8" height="8" rx="1.5" />
                            <rect x="13" y="3" width="8" height="5" rx="1.5" />
                            <rect x="13" y="11" width="8" height="10" rx="1.5" />
                            <rect x="3" y="14" width="8" height="7" rx="1.5" />
                        </svg>
                    </div>
                    <h5 class="mb-1">Open Roles</h5>
                    <p class="text-soft mb-0" style="font-size:0.9rem;">Full-time &amp; remote positions available</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-tile text-center card-lift">
                    <div class="feature-icon moss mx-auto mb-3" style="width:56px;height:56px;margin:0 auto 1rem;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24"
                            height="24">
                            <circle cx="12" cy="8" r="3.2" />
                            <path d="M5 21c0-4 3-6.5 7-6.5s7 2.5 7 6.5" />
                        </svg>
                    </div>
                    <h5 class="mb-1">Team Size</h5>
                    <p class="text-soft mb-0" style="font-size:0.9rem;">Growing community of passionate developers</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-tile text-center card-lift">
                    <div class="feature-icon ink mx-auto mb-3" style="width:56px;height:56px;margin:0 auto 1rem;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24"
                            height="24">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                        </svg>
                    </div>
                    <h5 class="mb-1">Fully Remote</h5>
                    <p class="text-soft mb-0" style="font-size:0.9rem;">Work from anywhere in the world</p>
                </div>
            </div>
        </div>

        <div class="divider my-4"></div>

        <h3 class="mb-4">Current Openings</h3>
        <div class="row gy-3 mb-5">
            <div class="col-md-6">
                <div class="grid-card">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0">Full-Stack Developer</h5>
                        <span class="badge-tag" style="background:var(--rope); color:white;">Full-time</span>
                    </div>
                    <p class="text-soft mb-2" style="font-size:0.9rem;">Build and maintain the core platform, APIs, and
                        analytics engine.</p>
                    <ul class="list-unstyled" style="font-size:0.85rem;">
                        <li class="text-soft mb-1">&bull; Node.js / Python experience</li>
                        <li class="text-soft mb-1">&bull; Database design &amp; optimization</li>
                        <li class="text-soft mb-1">&bull; Cloud infrastructure (AWS/GCP)</li>
                    </ul>
                    <button class="btn btn-sm btn-rope mt-3" data-bs-toggle="modal" data-bs-target="#applyModal">Apply
                        Now</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="grid-card">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0">Frontend Engineer</h5>
                        <span class="badge-tag" style="background:var(--moss); color:white;">Full-time</span>
                    </div>
                    <p class="text-soft mb-2" style="font-size:0.9rem;">Create beautiful, responsive user interfaces and
                        interactive dashboards.</p>
                    <ul class="list-unstyled" style="font-size:0.85rem;">
                        <li class="text-soft mb-1">&bull; React / Vue.js proficiency</li>
                        <li class="text-soft mb-1">&bull; CSS/SCSS expertise</li>
                        <li class="text-soft mb-1">&bull; UX/UI design sensibility</li>
                    </ul>
                    <button class="btn btn-sm btn-rope mt-3" data-bs-toggle="modal" data-bs-target="#applyModal">Apply
                        Now</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="grid-card">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0">DevOps Engineer</h5>
                        <span class="badge-tag" style="background:var(--ink); color:white;">Contract</span>
                    </div>
                    <p class="text-soft mb-2" style="font-size:0.9rem;">Manage infrastructure, CI/CD pipelines, and ensure
                        99.99% uptime.</p>
                    <ul class="list-unstyled" style="font-size:0.85rem;">
                        <li class="text-soft mb-1">&bull; Docker, Kubernetes, Terraform</li>
                        <li class="text-soft mb-1">&bull; Monitoring &amp; alerting setup</li>
                        <li class="text-soft mb-1">&bull; Security &amp; compliance</li>
                    </ul>
                    <button class="btn btn-sm btn-rope mt-3" data-bs-toggle="modal" data-bs-target="#applyModal">Apply
                        Now</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="grid-card">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0">Community Manager</h5>
                        <span class="badge-tag" style="background:var(--moss); color:white;">Part-time</span>
                    </div>
                    <p class="text-soft mb-2" style="font-size:0.9rem;">Engage with the Knot community, manage feedback,
                        and organize events.</p>
                    <ul class="list-unstyled" style="font-size:0.85rem;">
                        <li class="text-soft mb-1">&bull; Excellent communication skills</li>
                        <li class="text-soft mb-1">&bull; Social media &amp; forum management</li>
                        <li class="text-soft mb-1">&bull; Open source experience</li>
                    </ul>
                    <button class="btn btn-sm btn-rope mt-3" data-bs-toggle="modal" data-bs-target="#applyModal">Apply
                        Now</button>
                </div>
            </div>
        </div>

        <div class="divider my-4"></div>

        <h3 class="mb-4">Apply Now</h3>
        <p class="text-soft mb-4">Fill out the form below and upload your resume to apply for a position at Knot.</p>

        <form id="carrierForm" class="carrier-form" onsubmit="return false;">
            <div class="row gy-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label">First Name <span class="text-required">*</span></label>
                    <input type="text" class="form-control" id="firstName" placeholder="Enter your first name"
                        required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Last Name <span class="text-required">*</span></label>
                    <input type="text" class="form-control" id="lastName" placeholder="Enter your last name"
                        required>
                </div>
            </div>

            <div class="row gy-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label">Email Address <span class="text-required">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="+1 (555) 000-0000">
                </div>
            </div>

            <div class="row gy-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label">Position Applying For <span class="text-required">*</span></label>
                    <select class="form-select" id="position" required>
                        <option value="">Select a position</option>
                        <option value="fullstack">Full-Stack Developer</option>
                        <option value="frontend">Frontend Engineer</option>
                        <option value="devops">DevOps Engineer</option>
                        <option value="community">Community Manager</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Experience Level <span class="text-required">*</span></label>
                    <select class="form-select" id="experience" required>
                        <option value="">Select experience level</option>
                        <option value="entry">Entry Level (0-2 years)</option>
                        <option value="mid">Mid Level (2-5 years)</option>
                        <option value="senior">Senior Level (5+ years)</option>
                        <option value="lead">Lead / Principal</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">LinkedIn Profile URL</label>
                <input type="url" class="form-control" id="linkedin"
                    placeholder="https://linkedin.com/in/yourprofile">
            </div>

            <div class="mb-3">
                <label class="form-label">Portfolio / GitHub URL</label>
                <input type="url" class="form-control" id="portfolio" placeholder="https://github.com/yourusername">
            </div>

            <div class="mb-3">
                <label class="form-label">Cover Letter <span class="text-required">*</span></label>
                <textarea class="form-control" id="coverLetter" rows="4"
                    placeholder="Tell us why you'd be a great fit for the Knot team..." required></textarea>
            </div>

            <div class="mb-4">
                <label class="form-label">Resume / CV <span class="text-required">*</span></label>
                <div class="upload-zone" id="uploadZone" onclick="document.getElementById('resumeInput').click()">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2" width="48"
                        height="48">
                        <path d="M24 32V12M16 22l8-8 8 8" />
                        <path d="M8 36v4a4 4 0 004 4h24a4 4 0 004-4v-4" />
                    </svg>
                    <p class="mb-0">Drag and drop your resume here or <span class="text-rope fw-semibold">click to
                            browse</span></p>
                    <p class="upload-hint">PDF, DOC, or DOCX — Max 5MB</p>
                    <input type="file" id="resumeInput" accept=".pdf,.doc,.docx" onchange="handleFileSelect(event)">
                    <div class="file-preview" id="filePreview">
                        <div class="file-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                width="16" height="16">
                                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
                            </svg>
                        </div>
                        <div class="file-info">
                            <div class="file-name" id="fileName"></div>
                            <div class="file-size" id="fileSize"></div>
                        </div>
                        <span class="file-remove" onclick="removeFile(event)" title="Remove file">&times;</span>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                    <label class="form-check-label" for="agreeTerms">I agree to the <a href="terms-conditions.html"
                            class="text-rope">Terms &amp; Conditions</a> and <a href="privacy-policy.html"
                            class="text-rope">Privacy Policy</a> <span class="text-required">*</span></label>
                </div>
            </div>

            <div class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agreeRemote">
                    <label class="form-check-label" for="agreeRemote">I understand this is a remote position and I am
                        eligible to work in the selected timezone</label>
                </div>
            </div>

            <div class="d-flex gap-3 flex-wrap">
                <button type="submit" class="btn btn-rope btn-lg" id="submitBtn">Submit Application</button>
                <button type="button" class="btn btn-outline-ink btn-lg" onclick="resetForm()">Reset Form</button>
            </div>
        </form>

        <!-- Success Message -->
        <div class="success-message d-none" id="successMessage">
            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" width="60" height="60">
                <circle cx="30" cy="30" r="28" stroke="var(--moss)" stroke-width="3" />
                <path d="M18 30l8 8 14-14" stroke="var(--moss)" stroke-width="3" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <h3>Application Submitted!</h3>
            <p>Thank you for your interest in joining Knot. We'll review your application and get back to you within 5
                business days.</p>
            <p class="text-faint" style="font-size:0.85rem;">Check your email at <span id="successEmail"></span> for
                confirmation.</p>
        </div>
    </div>
    </main>

    <!-- Apply Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:var(--radius-lg);">
                <div class="modal-header">
                    <h5 class="modal-title">Apply for this position</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-soft mb-3">You'll be redirected to the application form below. Fill out all required
                        fields and upload your resume to apply.</p>
                    <div class="data-processor">
                        <h5>What to expect</h5>
                        <p style="font-size:0.88rem;">After submitting, you'll receive a confirmation email. Our team will
                            review your application and contact you for an interview within 5 business days.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-ink" data-bs-dismiss="modal">Close</button>
                    <a href="#apply" class="btn btn-rope">Go to Application</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // File upload handling
        function handleFileSelect(event) {
            var file = event.target.files[0];
            if (file) {
                var preview = document.getElementById('filePreview');
                var nameEl = document.getElementById('fileName');
                var sizeEl = document.getElementById('fileSize');
                nameEl.textContent = file.name;
                sizeEl.textContent = formatFileSize(file.size);
                preview.classList.add('visible');
                document.getElementById('uploadZone').querySelector('svg').style.display = 'none';
                document.getElementById('uploadZone').querySelector('p').style.display = 'none';
                document.getElementById('uploadZone').querySelector('.upload-hint').style.display = 'none';
            }
        }

        function removeFile(event) {
            event.stopPropagation();
            document.getElementById('filePreview').classList.remove('visible');
            document.getElementById('resumeInput').value = '';
            document.getElementById('uploadZone').querySelector('svg').style.display = '';
            document.getElementById('uploadZone').querySelector('p').style.display = '';
            document.getElementById('uploadZone').querySelector('.upload-hint').style.display = '';
        }

        function formatFileSize(bytes) {
            if (bytes < 1024) return bytes + ' B';
            if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
            return (bytes / 1048576).toFixed(1) + ' MB';
        }

        // Drag and drop
        var uploadZone = document.getElementById('uploadZone');
        if (uploadZone) {
            uploadZone.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('dragover');
            });
            uploadZone.addEventListener('dragleave', function() {
                this.classList.remove('dragover');
            });
            uploadZone.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
                var file = e.dataTransfer.files[0];
                if (file) {
                    document.getElementById('resumeInput').files = e.dataTransfer.files;
                    handleFileSelect({
                        target: {
                            files: [file]
                        }
                    });
                }
            });
        }

        // Form submission
        document.getElementById('carrierForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var firstName = document.getElementById('firstName').value.trim();
            var email = document.getElementById('email').value.trim();
            var coverLetter = document.getElementById('coverLetter').value.trim();
            var resume = document.getElementById('resumeInput').files[0];

            if (!firstName || !email || !coverLetter || !resume) {
                showToast('Please fill all required fields and upload your resume');
                return;
            }

            document.getElementById('carrierForm').style.display = 'none';
            document.getElementById('successMessage').classList.remove('d-none');
            document.getElementById('successEmail').textContent = email;
            showToast('Application submitted successfully!');
        });

        function resetForm() {
            document.getElementById('carrierForm').reset();
            document.getElementById('filePreview').classList.remove('visible');
            document.getElementById('uploadZone').querySelector('svg').style.display = '';
            document.getElementById('uploadZone').querySelector('p').style.display = '';
            document.getElementById('uploadZone').querySelector('.upload-hint').style.display = '';
            document.getElementById('carrierForm').style.display = '';
            document.getElementById('successMessage').classList.add('d-none');
        }

        // Scroll to form on "Apply Now" click
        document.querySelectorAll('[data-bs-target="#applyModal"]').forEach(function(btn) {
            btn.addEventListener('click', function() {
                setTimeout(function() {
                    document.getElementById('apply').scrollIntoView({
                        behavior: 'smooth'
                    });
                }, 300);
            });
        });
    </script>
@endpush
