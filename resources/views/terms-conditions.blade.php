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
    <div class="legal-page py-5">
        <h2>Terms &amp; Conditions</h2>
        <p class="last-updated">Last updated: September 13, 2026</p>

        <p>Please read these Terms and Conditions carefully before using the Knot service. By accessing or using our
            service, you agree to be bound by these terms. If you disagree with any part, you may not use the service.</p>

        <div class="divider my-4"></div>

        <h3>1. Acceptance of Terms</h3>
        <p>By creating an account, accessing, or using the Knot service, you confirm that you have read, understood, and
            agree to be bound by these Terms and Conditions, our Privacy Policy, and any additional policies published on
            our website. If you do not agree, please do not use the service.</p>

        <div class="divider my-4"></div>

        <h3>2. Description of Service</h3>
        <p>Knot is a free link management service that allows users to:</p>
        <ul>
            <li>Shorten long URLs into custom short links</li>
            <li>Brand links with custom domains</li>
            <li>Track click analytics including location, device, and referrer data</li>
            <li>Generate QR codes for short links</li>
            <li>Create link-in-bio pages</li>
            <li>Manage team workspaces and collaborate</li>
        </ul>
        <p>Knot is provided on an "as is" and "as available" basis.</p>

        <div class="divider my-4"></div>

        <h3>3. User Accounts</h3>
        <ul>
            <li>You are responsible for maintaining the confidentiality of your account credentials</li>
            <li>You agree to notify us immediately of any unauthorized use of your account</li>
            <li>You are responsible for all activities that occur under your account</li>
            <li>You must provide accurate, current, and complete information during registration</li>
            <li>You may not create multiple accounts or use another person's account without permission</li>
            <li>We reserve the right to suspend or terminate accounts that violate these terms</li>
        </ul>

        <div class="divider my-4"></div>

        <h3>4. Acceptable Use</h3>
        <p>You agree to use the Knot service only for lawful purposes and in accordance with these terms. You agree not to:
        </p>
        <ul>
            <li>Use the service to shorten, brand, or track links to illegal, harmful, or infringing content</li>
            <li>Use the service for spam, phishing, malware distribution, or any fraudulent activity</li>
            <li>Interfere with or disrupt the service or servers and networks connected to the service</li>
            <li>Attempt to gain unauthorized access to the service, other accounts, or systems</li>
            <li>Reverse engineer, decompile, or disassemble any part of the service</li>
            <li>Use the service to send unsolicited commercial communications (spam)</li>
            <li>Use the service in a way that violates any applicable law or regulation</li>
            <li>Create links that impersonate individuals, brands, or organizations without authorization</li>
        </ul>

        <div class="divider my-4"></div>

        <h3>5. User Content &amp; Intellectual Property</h3>
        <ul>
            <li>You retain all ownership rights to the URLs and content you submit through the service</li>
            <li>By using the service, you grant Knot a worldwide, non-exclusive, royalty-free license to process your link
                data for the purpose of providing the service</li>
            <li>Knot's trademarks, logos, and service marks are the property of Knot and may not be used without prior
                written consent</li>
            <li>You may not use Knot's branding or trademarks in a way that suggests endorsement or affiliation</li>
        </ul>

        <div class="divider my-4"></div>

        <h3>6. Free Service Disclaimer</h3>
        <p>Knot is provided free of charge. Because the service is free, it is provided on an "as is" and "as available"
            basis without warranties of any kind, either express or implied. We do not guarantee that the service will be
            uninterrupted, error-free, or available at all times.</p>
        <p>We may modify, suspend, or discontinue the service (or any part thereof) at any time, with or without notice, and
            without liability to you.</p>

        <div class="divider my-4"></div>

        <h3>7. Limitations of Liability</h3>
        <p>To the fullest extent permitted by applicable law, Knot shall not be liable for any indirect, incidental,
            special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill,
            or other intangible losses, resulting from your use or inability to use the service.</p>
        <p>Knot's total liability for any claims under these terms shall not exceed the amount paid by you, if any, for the
            service in the preceding twelve months.</p>

        <div class="divider my-4"></div>

        <h3>8. Indemnification</h3>
        <p>You agree to indemnify, defend, and hold harmless Knot, its officers, employees, and agents from and against any
            claims, liabilities, damages, losses, costs, and expenses (including reasonable attorneys' fees) arising out of
            or related to your use of the service, your violation of these terms, or your infringement of any third-party
            rights.</p>

        <div class="divider my-4"></div>

        <h3>9. Termination</h3>
        <p>We may terminate or suspend your account and access to the service at any time, with or without cause, and with
            or without notice, for any reason including:</p>
        <ul>
            <li>Violation of these Terms and Conditions</li>
            <li>Engagement in harmful, illegal, or abusive behavior</li>
            <li>Creation of links to harmful or infringing content</li>
            <li>Security concerns or unauthorized access</li>
        </ul>
        <p>Upon termination, all data associated with your account may be deleted. You agree that your right to use the
            service will terminate immediately upon any violation of these terms.</p>

        <div class="divider my-4"></div>

        <h3>10. Governing Law</h3>
        <p>These Terms and Conditions shall be governed and construed in accordance with the laws of the jurisdiction in
            which Knot operates, without regard to its conflict of law provisions. Any disputes shall be resolved in the
            competent courts of that jurisdiction.</p>

        <div class="divider my-4"></div>

        <h3>11. Changes to Terms</h3>
        <p>We reserve the right to modify these Terms and Conditions at any time. We will notify users of material changes
            by posting the updated terms on this page and updating the "Last updated" date. Your continued use of the
            service after changes constitutes acceptance of the updated terms.</p>

        <div class="divider my-4"></div>

        <h3>12. Contact</h3>
        <div class="data-processor">
            <h5>Contact for Terms Questions</h5>
            <p>Knot Theme<br>
                Email: <a href="mailto:legal@knot.to" class="text-rope">legal@knot.to</a><br>
                Address: Knot Theme, Support Team</p>
        </div>
    </div>
@endsection
{{-- Page-specific JavaScript --}}
@push('scripts')
    <script>
        // $( document ).ready(function() {
        //     console.log( "ready!" );
        // });
    </script>
@endpush
