#!/usr/bin/env bash
set -euo pipefail

APP_ROOT="$(cd -- "$(dirname -- "${BASH_SOURCE[0]}")" && pwd)"
WEB_ROOT="${APP_ROOT}"

if [[ ! -f "${APP_ROOT}/public/index.php" ]]; then
    echo "Error: ${APP_ROOT}/public/index.php not found; run this from the Laravel checkout." >&2
    exit 1
fi

if [[ ! -f "${WEB_ROOT}/index.php" ]]; then
    echo "Error: ${WEB_ROOT}/index.php not found; app folder does not look like the site's document root." >&2
    exit 1
fi

shopt -s dotglob nullglob
for source in "${APP_ROOT}"/public/*; do
    [[ -e "${source}" || -L "${source}" ]] || continue
    name="${source##*/}"

    # Preserve the custom front controller and Laravel's private storage directory.
    case "${name}" in
        index.php|storage)
            continue
            ;;
    esac

    cp -a -- "${source}" "${WEB_ROOT}/"
done

echo "Public assets copied to ${WEB_ROOT}. Front controller and storage were preserved."
