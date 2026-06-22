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
  document.getElementById('email').value = '';
  passInput.value          = '';
  passInput.type           = 'password';
  iconOpen.hidden   = false;
  iconClosed.hidden = true;
  syncIcons();
  document.getElementById('email').focus();
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
  e.preventDefault();
  const email = document.getElementById('email').value.trim();
  const password = passInput.value.trim();

  if (!email && !password) { showToast('Please enter your email and password.'); return; }
  if (!email)               { showToast('Please enter your email.');              return; }
  if (!password)               { showToast('Please enter your password.');              return; }

  const btn = document.getElementById('loginBtn');
  btn.textContent = 'Logging in…';
  btn.disabled    = true;

  setTimeout(() => {
    btn.textContent = 'Login';
    btn.disabled    = false;
    showToast('Login functionality is for demonstration only.');
  }, 1500);
});
