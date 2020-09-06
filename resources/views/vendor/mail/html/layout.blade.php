<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style='background-color:#f8f8f8;'>
    <table class="wrapper" style='background-color:#f8f8f8;' width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="60%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" style='background-color:#ffffff;' align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                {{ $header ?? '' }}
                                <tr>
                                    <td class="content-cell" align="center">
                                        <img style="width: 100%" src='https://lh3.googleusercontent.com/zBlphGpKwVVboPqYBFk_BoFrS2l1FfkU3-kVHDks1JkIaY9KSMM-7HziQYiB9XpP-iHDGdNGwWy7ekl-6lXpc8pkIfKJHiSsZPbGr_b7BrCusF7nP_3blN9GaC7ZDIh-EUQo4-iU0Q=w2400' />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-cell">
                                        {{ Illuminate\Mail\Markdown::parse($slot) }}

                                        {{ $subcopy ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-cell" align="center">
                                        <big><b>Thank you for your cooperation</b></big><br>
                                        <b>We sincerely hope to welcome you in Bandung!</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-cell">
                                        <p>
                                            Best regards,<br>Andiva Liesty Amelia<br>Under-Secretary-General of Delegates' Affair and Accommodations<br>ITBMUN 2020<br>
                                            <a href="tel:+6281269630500">Telp: +62 812 6963 0500</a>
                                        </p>
                                    </td>
                                </tr>
                                {{ $footer ?? '' }}
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>
