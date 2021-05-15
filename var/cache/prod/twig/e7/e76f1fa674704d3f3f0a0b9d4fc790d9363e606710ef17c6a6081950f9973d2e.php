<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @FOSUser/FOSUserBundle/translations/FOSUserBundle.en.yml */
class __TwigTemplate_e71e6d8cbb5977078893115093391e4932f1b282f855348c72c61d57d719a11b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "# Group
group:
    edit:
        submit: Update group
    show:
        name: Group name
    new:
        submit: Create group
    flash:
        updated: The group has been updated
        created: The group has been created
        deleted: The group has been deleted

# Security
security:
    login:
        username: Username
        password: Password
        remember_me: Remember me
        submit: Log in

# Profile
profile:
    show:
        username: Username
        email: Email
    edit:
        submit: Update
    flash:
        updated: The profile has been updated

# Password change
change_password:
    submit: Change password
    flash:
        success: The password has been changed

# Registration
registration:
    check_email: An email has been sent to %email%. It contains an activation link you must click to activate your account.
    confirmed: Congrats %username%, your account is now activated.
    back: Back to the originating page.
    submit: Register
    flash:
        user_created: The user has been created successfully
    email:
        subject: Welcome %username%!
        message: |
            Hello %username%!

            To finish activating your account - please visit %confirmationUrl%

            Regards,
            the Team.

# Password resetting
resetting:
    password_already_requested: The password for this user has already been requested within the last 24 hours.
    check_email: An email has been sent to %email%. It contains a link you must click to reset your password.
    request:
        invalid_username: The username or email address \"%username%\" does not exist.
        username: Username or email address
        submit: Reset password
    reset:
        submit: Change password
    flash:
        success: The password has been reset successfully
    email:
        subject: Reset Password
        message: |
            Hello %username%!

            To reset your password - please visit %confirmationUrl%

            Regards,
            the Team.

# Global strings
layout:
    logout: Log out
    login: Log in
    register: Register
    logged_in_as: Welcome back %username%

# Form field labels
form:
    group_name: Group name
    username: Username
    email: Email
    current_password: Current password
    password: Password
    password_confirmation: Repeat password
    new_password: New password
    new_password_confirmation: Repeat new password
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/FOSUserBundle/translations/FOSUserBundle.en.yml";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/FOSUserBundle/translations/FOSUserBundle.en.yml", "E:\\proyectos\\sapucai\\gestionFaena\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\FOSUserBundle\\translations\\FOSUserBundle.en.yml");
    }
}
