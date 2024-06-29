<?php

if (!function_exists('snake_case_to_title')) {
    function snake_case_to_title($string) {
        // Replace underscores with spaces and convert to title case
        return ucwords(str_replace('_', ' ', $string));
    }
}

if (!function_exists('camel_case_to_title')) {
    function camel_case_to_title($string) {
        // Replace underscores with spaces and convert to title case
        return ucwords(implode(' ',preg_split('/(?=[A-Z])/', $string )));
    }
}


if (!function_exists('validateDate')) {
    function validateDate($date)
    {
        $pattern = '/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}\.\d{2}Z$/';

        if (preg_match($pattern, $date)) {
            try {
                new DateTime($date);
                return true;
            } catch (Exception $e) {
                return false;
            }
        } else {
            return false;
        }
    }
}

if (!function_exists('generateHtmlForElement')) {
    function generateHtmlForElement($key, $value)
    {
        $html = '';
        if (is_array($value)) {
            if (array_keys($value) !== range(0, count($value) - 1)) {
                // Associative array
                $html .= (!empty($key) ? '<div><strong>' . camel_case_to_title(htmlspecialchars($key)) . ':</strong></div>' : '');
                $html .= '<div class="ml-10 space-y-2">';
                foreach ($value as $subKey => $subValue) {
                    $html .= generateHtmlForElement($subKey, $subValue);
                }
                $html .= '</div>';
            } else {
                // Indexed array
                $html .= (!empty($key) ? '<div class="space-y-2"><strong>' . camel_case_to_title(htmlspecialchars($key)) . ':</strong>' : '');
                foreach ($value as $subValue) {
                    $html .= ' ' . ucfirst(generateHtmlForElement('', $subValue));
                }
                $html .= '</div>';
            }
        } elseif (is_bool($value)) {
            $html .= (!empty($key) ? '<p class="space-y-2"><strong>' . camel_case_to_title(htmlspecialchars($key)) . ':</strong> ' : '') . ($value ? 'Yes' : 'No') . '</p>';
        } elseif (validateDate($value)) {
            $html .= (!empty($key) ? '<p class="space-y-2"><strong>' . camel_case_to_title(htmlspecialchars($key)) . ':</strong> ' : '') . (new DateTime($value))->setTimezone(new DateTimeZone('Europe/Bucharest'))->format('d-m-Y') . '</p>';
        } else {
            $html .= (!empty($key) ? '<p class="space-y-2"><strong>' . camel_case_to_title(htmlspecialchars($key)) . ':</strong> ' : '') . htmlspecialchars($value) . '</p>';
        }
        return $html;
    }
}

if (!function_exists('generateHtmlFromJson')) {
    function generateHtmlFromJson($data) {

        $html = '<div class="space-y-2">';

        foreach ($data as $key => $value) {
            $html .= generateHtmlForElement($key, $value);
        }

        $html .= '</div>';

        return $html;
    }
}
