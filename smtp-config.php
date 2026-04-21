<?php
/**
 * SMTP Configuration File
 * 
 * IMPORTANT: Update these values with your actual SMTP credentials.
 * Keep this file secure and do not share it publicly.
 */

return [
    // SMTP Host (e.g., mail.echobroad.com, smtp.gmail.com, etc.)
    'smtp_host' => 'mail.echobroad.com',
    
    // SMTP Port (Commonly 587 for TLS, 465 for SSL)
    'smtp_port' => 465,
    
    // SMTP Username (usually your full email address)
    'smtp_username' => 'info@echobroad.com',
    
    // SMTP Password (your email account password)
    // NOTE: For security, consider using environment variables or a secure vault in production.
    'smtp_password' => 'dDjWxuo+7la51UbF',
    
    // Encryption type ('tls', 'ssl', or '')
    'smtp_encryption' => 'ssl',
    
    // SMTP Authentication (usually true)
    'smtp_auth' => true,
    
    // From email address (must match SMTP username for most servers)
    'from_email' => 'info@echobroad.com',
    
    // From name
    'from_name' => 'EchoBroad Agency',
    
    // Recipient email (where contact form submissions will be sent)
    'recipient_email' => 'info@echobroad.com',
    
    // SMTP debug output (0 = off for production, 2 = for debugging)
    'smtp_debug' => 0,
    
    // SMTP Timeout (seconds)
    'smtp_timeout' => 30,
    
    // Enable verbose debug output in JSON response (false for production)
    'verbose_errors' => false
];
?>
