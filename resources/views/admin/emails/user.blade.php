<table cellpadding='0' cellspacing='0' border='0' bgcolor='#006699' style='border:solid 10px #006699; width:550px;'>
    <tr bgcolor='#006699' height='25'>
        <td><img src="{{ url('admin/assets/images/v-plus-logo.png') }}" border='0' width='200' height='60' /></td>
    </tr>
                    <tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
                    <tr bgcolor='#FFFFFF' height='30'>
                    <td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b> Login details from "{{ url('/') }}" </b></td>
                    </tr>


                        <tr bgcolor='#FFFFFF' height='35'>
                    <td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Username : {{ $userData['user_profileid'] }} (or) {{ $userData['user_email'] }} </td>
                    </tr>

                <tr bgcolor='#FFFFFF' height='35'>
                    <td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Password : {{ $userData['user_dpassword'] }}</td>
                    </tr>

                <tr bgcolor='#FFFFFF' height='35'>
                    <td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'><a href='' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#FFFFFF;'>Click Here</a></td>
                    </tr>

                        <tr bgcolor='#FFFFFF'>
         <td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
            {{ url('/') }}<br>
        </td>

    </tr>
                    <tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
                    <tr height='40'>

<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color:#006699;
color: #000000;'>&copy; Copyright " .date("Y")."&nbsp;"."<a href='' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#FFFFFF;'>{{ url('/') }}</a>."."
</td>
</tr>
</table>
