// ── Password toggle ──────────────────────────────────
const toggleBtn  = document.getElementById('togglePassword');
const passInput  = document.getElementById('password');
const iconOpen   = document.getElementById('iconOpen');
const iconClosed = document.getElementById('iconClosed');

function syncIcons() {
  iconOpen.hidden   = passInput.type !== 'password';
  iconClosed.hidden = passInput.type === 'password';
}

toggleBtn.addEventListener('click', () => {
  passInput.type = passInput.type === 'password' ? 'text' : 'password';
  syncIcons();
});

window.addEventListener('focus', syncIcons);

// ── Clear ────────────────────────────────────────────
document.getElementById('clearBtn').addEventListener('click', () => {
  document.getElementById('username').value = '';
  passInput.value          = '';
  passInput.type           = 'password';
  iconOpen.hidden   = false;
  iconClosed.hidden = true;
  syncIcons();
  document.getElementById('username').focus();
});

// ── Toast ────────────────────────────────────────────
let toastTimer;
function showToast(msg, ms = 3200) {
  const toast = document.getElementById('toast');
  document.getElementById('toastMessage').textContent = msg;
  toast.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => toast.classList.remove('show'), ms);
}

// ── Form submit ──────────────────────────────────────
document.getElementById('loginForm').addEventListener('submit', (e) => {
  const username = document.getElementById('username').value.trim();
  const password = passInput.value.trim();

  if (!username && !password) { 
    e.preventDefault();
    showToast('Please enter your username and password.'); 
    return; 
  }
  if (!username) { 
    e.preventDefault();
    showToast('Please enter your username.'); 
    return; 
  }
  if (!password) { 
    e.preventDefault();
    showToast('Please enter your password.'); 
    return; 
  }
});

// ── Show error toast on page load ────────────────────
window.addEventListener('DOMContentLoaded', () => {
  const errorElement = document.querySelector('[data-login-error]');
  if (errorElement) {
    const errorMsg = errorElement.getAttribute('data-login-error');
    if (errorMsg) {
      showToast(errorMsg);
    }
  }
});
