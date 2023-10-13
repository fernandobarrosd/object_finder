export function onSubmit(form, callback) {
    form.addEventListener("submit", e => {
        e.preventDefault();
        const fields = e.target.querySelectorAll("input");
        const data = Array.from(fields).map(field => field);
        callback(data)
    })
}