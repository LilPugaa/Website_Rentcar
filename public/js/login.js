document.addEventListener('DOMContentLoaded', function () {
    // Ambil elemen form
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');

    // Fungsi untuk menangani form registrasi
    if (registerForm) {
        registerForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Cegah refresh halaman

            const formData = new FormData(registerForm);

            fetch("{{ route('register.store') }}", {
                method: "POST",
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Tampilkan pesan sukses atau arahkan ke halaman login
                    alert('Registrasi berhasil! Silakan login.');
                    window.location.href = "{{ route('login') }}"; // Redirect ke login
                } else {
                    // Tampilkan pesan error jika gagal
                    displayErrors(data.errors);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }

    // Fungsi untuk menangani form login
    if (loginForm) {
        loginForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Cegah refresh halaman

            const formData = new FormData(loginForm);

            fetch("{{ route('login') }}", {
                method: "POST",
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Redirect berdasarkan role
                    if (data.role === 'admin') {
                        window.location.href = "{{ route('dashboard') }}";
                    } else {
                        window.location.href = "{{ route('user') }}";
                    }
                } else {
                    // Tampilkan pesan error jika gagal
                    displayErrors(data.errors);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }

    // Fungsi untuk menampilkan error di form
    function displayErrors(errors) {
        const errorElements = document.querySelectorAll('.error');
        errorElements.forEach(element => element.textContent = ''); // Clear previous errors

        for (const [key, value] of Object.entries(errors)) {
            const errorElement = document.querySelector(`#${key}-error`);
            if (errorElement) {
                errorElement.textContent = value[0];
            }
        }
    }
});
