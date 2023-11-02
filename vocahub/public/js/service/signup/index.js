export async function checkDuplicate(type, value) {
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    const response = await fetch("/checkDuplicate", {
        method: "POST",
        body: JSON.stringify({ type: type, value: value }),
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
        },
    });
    const data = await response.json();
    return data;
}
