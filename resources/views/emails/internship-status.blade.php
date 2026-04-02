<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333; line-height: 1.6; }
        .wrapper { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #f0f0f0; border-radius: 8px; }
        .header { text-align: center; padding-bottom: 20px; border-bottom: 1px solid #eee; }
        .content { padding: 20px 0; }
        .status-badge { display: inline-block; padding: 8px 15px; background-color: #ebf5ff; color: #2563eb; border-radius: 20px; font-weight: bold; text-transform: uppercase; font-size: 14px; }
        .footer { font-size: 12px; color: #999; text-align: center; border-top: 1px solid #eee; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h2 style="color: #1e40af; margin: 0;">Intellisoft Nepal</h2>
        </div>

        <div class="content">
            <p>Dear <strong>{{ $internship->full_name }}</strong>,</p>

            <p>Thank you for your interest in the <strong>{{ $internship->apply_for }}</strong> internship position at Intellisoft Nepal. We have an update regarding your application.</p>

            <p>Your current application status is:</p>
            <div style="text-align: center;">
                <span class="status-badge">{{ $internship->status }}</span>
            </div>

            @if($internship->status === 'Accepted')
                <p><strong>Congratulations!</strong> We are pleased to inform you that your application has been accepted for the next stage. Our HR team will contact you shortly via phone or email to discuss the onboarding process and interview schedule.</p>
            @elseif($internship->status === 'Rejected')
                <p>After carefully reviewing your application, we regret to inform you that we will not be moving forward with your candidacy at this time. We appreciate the time you took to apply and wish you the best of luck in your future endeavors.</p>
            @else
                <p>Your application is currently under review. We will notify you as soon as a decision is made. Thank you for your patience.</p>
            @endif

            <p>If you have any questions, feel free to reply to this email.</p>

            <p>Best Regards,<br>
            <strong>Talent Acquisition Team</strong><br>
            Intellisoft Nepal</p>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Intellisoft Nepal. All rights reserved.<br>
            Kathmandu, Nepal | <a href="https://www.intellisoft.com.np" style="color: #999;">www.intellisoft.com.np</a></p>
        </div>
    </div>
</body>
</html>
