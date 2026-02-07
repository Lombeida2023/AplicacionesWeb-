<?php
/**
 * Calcula estadísticas básicas para el dashboard.
 *
 * @param array $links
 * @param array $users
 * @return array
 */
function calculate_dashboard_stats(array $links, array $users): array
{
    $total_links = count($links);
    $total_users = count($users);

    $last_user_email = 'N/A';

    if (!empty($users)) {
        $last_user = end($users); // Obtiene el último elemento del array
        if (isset($last_user['email'])) {
            $last_user_email = $last_user['email'];
        }
    }

    return [
        'total_links'     => $total_links,
        'total_users'     => $total_users,
        'last_user_email' => $last_user_email,
    ];
}
