<?php

class My_library {

    function heading_for_page($value_) {
        switch ($value_) {
            case 1:
                $data['title'] = "Yadav Law Associates, Legal and technical services, New Delhi";
                $data['desc_'] = 'At Yadav Law Associates, our collaborative team of professionals provides the most comprehensive legal and technical services.';
                break;
            case 2:
                $data['title'] = "Home: Yadav Law Associates, Legal and technical services, New Delhi";
                $data['desc_'] = 'At Yadav Law Associates, our collaborative team of professionals provides the most comprehensive legal and technical services.';
                break;
            case 3:
                $data['title'] = "The Firm: About Yadav Law Associates, Legal and technical services, New Delhi";
                $data['desc_'] = 'At Yadav Law Associates, our collaborative team of professionals provides the most comprehensive legal and technical services.';
                break;
            case 4:
                $data['title'] = "Our Team: Yadav Law Associates, Legal and technical services, New Delhi";
                $data['desc_'] = 'At Yadav Law Associates, our collaborative team of professionals provides the most comprehensive legal and technical services.';
                break;
            case 5:
                $data['title'] = "Practice Areas:  Yadav Law Associates, New Delhi";
                $data['desc_'] = 'At Yadav Law Associates, our collaborative team of professionals provides the most comprehensive legal and technical services.';
                break;
            case 6:
                $data['title'] = "Why Choose Us? Yadav Law Associates, Legal and technical services, New Delhi";
                $data['desc_'] = 'At Yadav Law Associates, Legal and technical services, our collaborative team of professionals provides the most comprehensive legal and technical services.';
                break;
            case 7:
                $data['title'] = "Career With Yadav Law Associates, New Delhi";
                $data['desc_'] = 'At Yadav Law Associates, our collaborative team of professionals provides the most comprehensive legal and technical services.';
                break;
            case 8:
                $data['title'] = "Contact Yadav Law Associates, Legal and technical services, New Delhi";
                $data['desc_'] = 'At Yadav Law Associates, Legal and technical services, our collaborative team of professionals provides the most comprehensive legal and technical services.';
                break;
            case 9:
                $data['title'] = "In News Yadav Law Associates, Legal and technical services,";
                $data['desc_'] = 'At Yadav Law Associates, our collaborative team of professionals provides the most comprehensive legal and technical services.';
                break;
            default:
                $data['title'] = "Yadav Law Associates, Legal and technical services,";
                $data['desc_'] = 'Yadav Law Associates Error Page';
        }
        return $data;
    }

}
