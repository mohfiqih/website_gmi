#!/usr/bin/env bash
set -euo pipefail

APP_ROOT="$(cd -- "$(dirname -- "${BASH_SOURCE[0]}")" && pwd)"
HOOK_PATH="$(git -C "${APP_ROOT}" rev-parse --git-path hooks/post-merge)"

if [[ "${HOOK_PATH}" != /* ]]; then
    HOOK_PATH="${APP_ROOT}/${HOOK_PATH}"
fi

if [[ -e "${HOOK_PATH}" ]]; then
    echo "Error: ${HOOK_PATH} already exists. Review it before replacing or combining hooks." >&2
    exit 1
fi

mkdir -p "$(dirname -- "${HOOK_PATH}")"
cat > "${HOOK_PATH}" <<'HOOK'
#!/usr/bin/env bash
set -euo pipefail

APP_ROOT="$(git rev-parse --show-toplevel)"
bash "${APP_ROOT}/deploy-public-assets.sh"
HOOK
chmod +x "${HOOK_PATH}"

# Publish the current assets once; subsequent git pulls run the same script automatically.
bash "${APP_ROOT}/deploy-public-assets.sh"

echo "Installed post-merge hook at ${HOOK_PATH}. Future successful git pulls will publish assets automatically."
