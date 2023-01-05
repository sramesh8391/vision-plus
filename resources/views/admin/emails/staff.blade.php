<table cellpadding='0' cellspacing='0' border='0' bgcolor='#006699' style='border:solid 10px #D64B14; width:550px;'>
    <tr bgcolor='#D64B14' height='25'>
        <td><img src="{{ url('admin/assets/images/v-plus-logo.png') }}" border='0' width='200' height='60' /></td>
    </tr>
                    <tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
                    <tr bgcolor='#FFFFFF' height='30'>
                    <td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b> Login Details for <a href="{{ url('/adminLogin') }}">Vision Plus</a> </b></td>
                    </tr>


                        <tr bgcolor='#FFFFFF' height='35'>
                    <td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Email id : {{ $staffData['staff_email'] }}</td>
                    </tr>

                    <tr bgcolor='#FFFFFF' height='35'>
                    <td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Password : {{ $staffData['decript_staff_password'] }}</td>
                    </tr>


                        <tr bgcolor='#FFFFFF'>
         <td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'> Regards,<br>
            <a href="{{ url('/adminLogin') }}">Vision Plus</a><br>
        </td>

    </tr>
                    <tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
                    <tr height='40'>

<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color:#D64B14;
color: #FFFFFF;'>&copy; Copyright " {{ date("Y") }}"&nbsp;"."<a href='{{ url('/adminLogin') }}' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#FFFFFF;'>Vision Plus</a>."."
</td>
</tr>
</table>
