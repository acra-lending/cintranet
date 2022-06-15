<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class QuickQualifierToggleController extends Controller
{
    public function toggleOn(Request $request)
    {
        $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
            'username' => env('WP_USERNAME'),
            'password' => env('WP_PASSWORD'),
        ]);

        $token = $token->json()['token'];

        $response = Http::withToken($token)
        ->post('https://acralending.com/wp-json/wp/v2/pages/8655', [
                'content' => "<p>[vc_row el_id=account css=&#8221;””.vc_custom_1602024854254{padding-top:”&#8221;][vc_column][vc_text_separator title=QUICK&nbspQUALIFIER color=custom border_width=2 accent_color=#0033a1][vc_row_inner][vc_column_inner][vc_column_text]</p>\n<p style=\"font-size: 12px;\"><strong>*Disclaimer</strong><br />\n<em style=\"font-size 12px; color: grey;\">The Quick Qualifier is intended for informational purposes, for mortgage professionals only. The information does not take into consideration borrower’s personal financial situation, verified credit score, income, existing debt, or other factors. This is not a commitment to lend. The non-binding quotes are not official Loan Estimates under Reg. Z. Acra Lending is an equal opportunity lender. Rate, terms and programs subject to change without notice. See <a href=\"/company/#state-licensing-information\">State Licenses Information</a> for where we lend.</em></p>\n<p>[/vc_column_text][vc_column_text el_class=form-frame-flex]<iframe loading=\"lazy\" src=\"https://acralending.com/LoanNEX/ws/\" width=\"100%\" height=\"1400px\" frameborder=\"0\" scrolling=\"yes\"></iframe>[/vc_column_text][vc_column_text]<!-- </p>\n<p style=\"text-align: center;\">Rates are currently being updated. Please check back later.</p> -->\n<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>\n"
        ]);

        if ($response->successful()) {

            return response()->json(['success' => 'Quick Qualifier Toggled On']);


        } else {

        $message = $response->json()['message'];
    
        return response()->json(['error' => $message]);
        }

    }

    public function toggleOff(Request $request)
    {
        $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
            'username' => env('WP_USERNAME'),
            'password' => env('WP_PASSWORD'),
        ]);

        $token = $token->json()['token'];

        $response = Http::withToken($token)
        ->post('https://acralending.com/wp-json/wp/v2/pages/8655', [
                'content' => "<p>[vc_row el_id=account css=&#8221;””.vc_custom_1602024854254{padding-top:”&#8221;][vc_column][vc_text_separator title=QUICK&nbspQUALIFIER color=custom border_width=2 accent_color=#0033a1][vc_row_inner][vc_column_inner][vc_column_text]</p>\n<p style=\"font-size: 12px;\"><strong>*Disclaimer</strong><br />\n<em style=\"font-size 12px; color: grey;\">The Quick Qualifier is intended for informational purposes, for mortgage professionals only. The information does not take into consideration borrower’s personal financial situation, verified credit score, income, existing debt, or other factors. This is not a commitment to lend. The non-binding quotes are not official Loan Estimates under Reg. Z. Acra Lending is an equal opportunity lender. Rate, terms and programs subject to change without notice. See <a href=\"/company/#state-licensing-information\">State Licenses Information</a> for where we lend.</em></p>\n<p>[/vc_column_text][vc_column_text el_class=form-frame-flex]<!-- <iframe loading=\"lazy\" src=\"https://acralending.com/LoanNEX/ws/\" width=\"100%\" height=\"1400px\" frameborder=\"0\" scrolling=\"yes\"></iframe> -->[/vc_column_text][vc_column_text]</p>\n<p style=\"text-align: center;\">Rates are currently being updated. Please check back later.</p>\n<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>\n"
        ]);

        if ($response->successful()) {

            return response()->json(['success' => 'Quick Qualifier Toggled Off']);
            ;

        } else {

        $message = $response->json()['message'];
    
        return response()->json(['error' => $message]);
        }

    }
}
