@extends('modules.emails.layout.app')

@section('content')
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="40" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
          <tr>
            <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="30"></td>
            <td>
              <div class="h4" style="color:#4a4a44; font-family:'Google Sans', sans-serif; font-size:20px; line-height:30px; text-align:left">Hello {{ $user->name }},</div>

              <div class="text-left" style="color:#949490; font-family:'Google Sans', sans-serif; font-size:15px; line-height:24px; text-align:left">
                Welcome to {{ config('app.name') }}. You are now a {{ $role->description }} of {{ config('app.nick') }} with {{ $user->email }} as your email address.
              </div>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="18" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

              <div class="h4" style="color:#4a4a44; font-family:'Google Sans', sans-serif; font-size:20px; line-height:30px; text-align:center">What To Do Now</div>

              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="20">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="3" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

                    <img src="{{ config('app.url') }}/images/email/bullet.png" border="0" width="11" height="11" alt="" />
                  </td>
                  <td class="text3" style="color:#55544d; font-family:'Google Sans', sans-serif; font-size:14px; line-height:24px; text-align:left">
                    Verify Your Email Address through the verification email sent to {{ $user->email }}
                  </td>
                </tr>
              </table>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="20">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="3" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

                    <img src="{{ config('app.url') }}/images/email/bullet.png" border="0" width="11" height="11" alt="" />
                  </td>
                  <td class="text3" style="color:#55544d; font-family:'Google Sans', sans-serif; font-size:14px; line-height:24px; text-align:left">
                    Complete your profile on your dashboard so you can be attached to a mentor
                  </td>
                </tr>
              </table>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="20">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="3" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

                    <img src="{{ config('app.url') }}/images/email/bullet.png" border="0" width="11" height="11" alt="" />
                  </td>
                  <td class="text3" style="color:#55544d; font-family:'Google Sans', sans-serif; font-size:14px; line-height:24px; text-align:left">
                    Start Learning and building awesome applications
                  </td>
                </tr>
              </table>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

              <div class="hide-for-mobile">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="12" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

              </div>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="30" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

            </td>
            <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="30"></td>
          </tr>
        </table>

      </td>
    </tr>
  </table>
@endsection
