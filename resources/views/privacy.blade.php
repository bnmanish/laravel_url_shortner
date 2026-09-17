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
    <h2>Privacy Policy</h2>
    <p class="last-updated">Last updated: September 13, 2026</p>

    <p>At Knot, we take your privacy seriously. This Privacy Policy explains how we collect, use, store, and protect your information when you use our link management service. By using Knot, you agree to the practices described in this policy.</p>

    <div class="divider my-4"></div>

    <h3>1. Information We Collect</h3>

    <h4>1.1 Personal Information</h4>
    <p>When you create an account or use our service, we may collect the following personal information:</p>
    <ul>
      <li>Name and email address</li>
      <li>Username and password (hashed and salted)</li>
      <li>Profile information (display name, avatar)</li>
      <li>Payment information (if applicable — processed securely by our payment provider)</li>
    </ul>

    <h4>1.2 Link Data</h4>
    <p>We collect data about the links you create and manage:</p>
    <ul>
      <li>Original destination URLs</li>
      <li>Custom short links and slugs</li>
      <li>Branded domain configurations</li>
      <li>Campaign tags and metadata</li>
      <li>Expiration settings</li>
    </ul>

    <h4>1.3 Analytics &amp; Usage Data</h4>
    <p>When people click your links, we collect analytics data:</p>
    <ul>
      <li>Click timestamps and frequency</li>
      <li>Geographic location (country-level)</li>
      <li>Device type and browser information</li>
      <li>Referrer source (e.g., social media, email, direct)</li>
      <li>IP addresses (anonymized)</li>
    </ul>

    <h4>1.4 Technical Data</h4>
    <p>We automatically collect certain information when you interact with our service:</p>
    <ul>
      <li>IP address and browser type</li>
      <li>Operating system</li>
      <li>Pages visited and time spent</li>
      <li>Cookies and similar tracking technologies</li>
    </ul>

    <div class="divider my-4"></div>

    <h3>2. How We Use Your Information</h3>
    <p>We use the information we collect for the following purposes:</p>
    <ul>
      <li><strong>To provide and maintain our service</strong> — including link shortening, redirection, and analytics</li>
      <li><strong>To process your account</strong> — registration, authentication, and profile management</li>
      <li><strong>To deliver analytics</strong> — showing you click data, geographic breakdowns, and performance metrics</li>
      <li><strong>To communicate with you</strong> — sending account notifications, security alerts, and service updates</li>
      <li><strong>To improve our service</strong> — analyzing usage patterns to develop new features and enhance performance</li>
      <li><strong>To ensure security</strong> — detecting and preventing fraud, abuse, and unauthorized access</li>
      <li><strong>To comply with legal obligations</strong> — responding to lawful requests and enforcing our terms</li>
    </ul>

    <div class="divider my-4"></div>

    <h3>3. Information Sharing &amp; Disclosure</h3>

    <h4>3.1 Service Providers</h4>
    <p>We work with trusted third-party service providers who help us operate our service:</p>
    <div class="third-party-list">
      <div class="third-party-item">
        <div class="tp-name">Cloud Hosting</div>
        <div class="tp-purpose">Server infrastructure</div>
      </div>
      <div class="third-party-item">
        <div class="tp-name">Analytics</div>
        <div class="tp-purpose">Usage metrics</div>
      </div>
      <div class="third-party-item">
        <div class="tp-name">Email Service</div>
        <div class="tp-purpose">Notifications</div>
      </div>
      <div class="third-party-item">
        <div class="tp-name">SSL Provider</div>
        <div class="tp-purpose">Security certificates</div>
      </div>
    </div>

    <h4>3.2 Legal Requirements</h4>
    <p>We may disclose your information if required by law, court order, or government regulation, or to protect the rights, property, or safety of Knot, our users, or others.</p>

    <h4>3.3 Business Transfers</h4>
    <p>In the event of a merger, acquisition, or asset sale, your personal data may be transferred as part of the transaction. You will be notified via email or prominent notice on our website before such a transfer occurs.</p>

    <div class="divider my-4"></div>

    <h3>4. Data Retention</h3>
    <p>We retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, including for compliance with legal obligations, dispute resolution, and enforcement of our agreements.</p>
    <p>Link analytics data is retained for the duration of your account activity. When you delete your account, your personal data is removed from our active systems within 30 days, though anonymized aggregate data may be retained.</p>

    <div class="divider my-4"></div>

    <h3>5. Your Data Protection Rights</h3>
    <p>Depending on your location, you have the following rights regarding your personal data:</p>
    <ul>
      <li><strong>Access</strong> — You can request a copy of the personal data we hold about you</li>
      <li><strong>Rectification</strong> — You can request correction of inaccurate or incomplete data</li>
      <li><strong>Erasure</strong> — You can request deletion of your personal data</li>
      <li><strong>Restriction</strong> — You can request restriction of how we process your data</li>
      <li><strong>Portability</strong> — You can request your data in a structured, machine-readable format</li>
      <li><strong>Objection</strong> — You can object to processing of your data, particularly for direct marketing</li>
      <li><strong>Withdrawal of Consent</strong> — You can withdraw consent at any time without affecting the lawfulness of prior processing</li>
    </ul>
    <p>To exercise any of these rights, please contact us at <a href="mailto:privacy@knot.to" class="text-rope">privacy@knot.to</a>.</p>

    <div class="divider my-4"></div>

    <h3>6. Security</h3>
    <p>We implement appropriate technical and organizational security measures to protect your personal data against unauthorized access, alteration, disclosure, or destruction.</p>
    <ul>
      <li>All data is encrypted in transit using TLS/SSL</li>
      <li>Passwords are hashed using bcrypt</li>
      <li>Regular security audits and vulnerability assessments</li>
      <li>Access controls and authentication measures</li>
      <li>Data backup and disaster recovery procedures</li>
    </ul>
    <p>Please note that no method of transmission over the internet or electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your data, we cannot guarantee absolute security.</p>

    <div class="divider my-4"></div>

    <h3>7. Cookies &amp; Tracking Technologies</h3>
    <p>We use cookies and similar tracking technologies to operate our service, improve performance, and personalize your experience. You can manage or disable cookies through your browser settings.</p>
    <p>By continuing to use our service, you consent to our use of cookies as described in this policy.</p>

    <div class="divider my-4"></div>

    <h3>8. Children's Privacy</h3>
    <p>Our service is not intended for individuals under the age of 16. We do not knowingly collect personal information from children under 16. If we become aware that we have collected such information, we will take steps to delete it immediately. If you are a parent or guardian and believe your child has provided us with personal data, please contact us at <a href="mailto:privacy@knot.to" class="text-rope">privacy@knot.to</a>.</p>

    <div class="divider my-4"></div>

    <h3>9. Changes to This Privacy Policy</h3>
    <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last updated" date. You are encouraged to review this policy periodically.</p>
    <p>Your continued use of the service after any changes constitutes acceptance of the updated policy.</p>

    <div class="divider my-4"></div>

    <h3>10. Contact Us</h3>
    <div class="data-processor">
      <h5>Data Controller</h5>
      <p>Knot Theme<br>
      Email: <a href="mailto:support@knot.to" class="text-rope">support@knot.to</a><br>
      Privacy Email: <a href="mailto:privacy@knot.to" class="text-rope">privacy@knot.to</a></p>
    </div>
    <p>If you have any questions about this Privacy Policy, please contact us using the details above.</p>
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