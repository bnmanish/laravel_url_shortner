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
    <div class="legal-page">
        <h2>Disclaimer</h2>
        <p class="last-updated">Last updated: September 13, 2026</p>

        <p>Please read this Disclaimer carefully before using the Knot service. By using our service, you acknowledge and
            agree to the terms outlined below.</p>

        <div class="divider my-4"></div>

        <h3>1. General Disclaimer</h3>
        <p>The Knot service is provided on an "as is" and "as available" basis. Knot makes no representations or warranties,
            express or implied, regarding the service, including but not limited to warranties of merchantability, fitness
            for a particular purpose, and non-infringement.</p>
        <p>Knot does not guarantee that the service will be uninterrupted, error-free, secure, or available at all times.
            Technical issues, outages, and delays may occur.</p>

        <div class="divider my-4"></div>

        <h3>2. No Professional Advice</h3>
        <p>The information, analytics, and data provided through the Knot service are for informational and educational
            purposes only. Knot does not provide professional advice, including legal, financial, medical, or investment
            advice. You should not rely on the data from our service as the sole basis for any decision.</p>
        <p>Any decisions made based on the analytics or data provided by Knot are at your own risk.</p>

        <div class="divider my-4"></div>

        <h3>3. Third-Party Links</h3>
        <p>The Knot service may contain links to third-party websites or services that are not owned or controlled by Knot.
            Knot has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any
            third-party websites or services.</p>
        <p>You acknowledge and agree that Knot shall not be responsible or liable, directly or indirectly, for any damage or
            loss caused or alleged to be caused by or in connection with your use of or reliance on any third-party content,
            goods, or services.</p>

        <div class="divider my-4"></div>

        <h3>4. User Content Responsibility</h3>
        <p>You are solely responsible for the content you create, manage, and share through the Knot service. You warrant
            that all links you create comply with applicable laws and regulations and do not contain harmful, illegal, or
            infringing content.</p>
        <p>Knot reserves the right to remove any links or content that it deems inappropriate, harmful, or in violation of
            these terms, without prior notice.</p>

        <div class="divider my-4"></div>

        <h3>5. Data Accuracy</h3>
        <p>While Knot strives to provide accurate analytics and data, we do not guarantee the completeness, accuracy, or
            timeliness of the information provided. Analytics data may be subject to delays, discrepancies, or inaccuracies
            due to technical limitations, browser settings, or user behavior.</p>
        <p>Click data and geographic information are approximations based on available signals and may not always be
            precise.</p>

        <div class="divider my-4"></div>

        <h3>6. Service Modifications</h3>
        <p>Knot reserves the right to modify, suspend, or discontinue the service (or any part thereof) at any time, with or
            without notice, and without liability to you. This includes, but is not limited to:</p>
        <ul>
            <li>Changes to features, functionality, or pricing</li>
            <li>Temporary or permanent suspension of the service</li>
            <li>Removal of links or content that violates our terms</li>
            <li>Changes to data retention policies</li>
        </ul>

        <div class="divider my-4"></div>

        <h3>7. Limitation of Liability</h3>
        <p>In no event shall Knot, its founders, developers, or contributors be liable for any indirect, incidental,
            special, consequential, or punitive damages, including without limitation loss of profits, data, or goodwill,
            arising out of or in connection with your use or inability to use the service.</p>
        <p>This limitation applies to all claims arising under these terms, whether in contract, tort, or otherwise.</p>

        <div class="divider my-4"></div>

        <h3>8. Indemnification</h3>
        <p>You agree to indemnify, defend, and hold harmless Knot, its officers, employees, and agents from and against any
            claims, liabilities, damages, losses, costs, and expenses (including reasonable attorneys' fees) arising out of
            or related to your use of the service, your violation of these terms, or your infringement of any third-party
            rights.</p>

        <div class="divider my-4"></div>

        <h3>9. Force Majeure</h3>
        <p>Knot shall not be liable for any failure or delay in performance due to events beyond its reasonable control,
            including natural disasters, pandemics, cyberattacks, government actions, internet outages, or other force
            majeure events.</p>

        <div class="divider my-4"></div>

        <h3>10. Severability</h3>
        <p>If any provision of these terms is found to be invalid or unenforceable, the remaining provisions shall continue
            in full force and effect. The invalid provision shall be modified to the minimum extent necessary to make it
            valid and enforceable.</p>

        <div class="divider my-4"></div>

        <h3>11. Waiver</h3>
        <p>No waiver of any term or condition set forth in these terms shall be considered a further or continuing waiver of
            such terms or any other terms, and Knot's failure to assert any right or provision shall not constitute a waiver
            of such right or provision.</p>

        <div class="divider my-4"></div>

        <h3>12. Contact</h3>
        <div class="data-processor">
            <h5>Contact for Disclaimer Questions</h5>
            <p>Knot Theme<br>
                Email: <a href="mailto:legal@knot.to" class="text-rope">legal@knot.to</a></p>
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
