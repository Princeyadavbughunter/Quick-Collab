import React from "react";

const logos = [
    { id: 1, src: "/company/1.png", alt: "Company 1" },
    { id: 2, src: "/company/2.png", alt: "Company 2" },
    { id: 3, src: "/company/3.png", alt: "Company 3" },
    { id: 4, src: "/company/4.png", alt: "Company 4" },
    { id: 5, src: "/company/5.png", alt: "Company 5" },
    { id: 6, src: "/company/6.png", alt: "Company 6" },
    { id: 7, src: "/company/7.png", alt: "Company 7" },
    { id: 8, src: "/company/8.png", alt: "Company 8" },
];

export default function Company() {
    return (
        <div
            style={{
                border: "1.5px solid #b3d9f7",
                borderRadius: "6px",
                backgroundColor: "#fff",
                width: "100%",
                display: "flex",
                flexWrap: "wrap", // Allow wrapping on small screens
                justifyContent: "center",
                alignItems: "stretch",
                gap: "8px",
                padding: "8px",
            }}
        >
            {logos.map((logo, index) => (
                <div
                    key={logo.id}
                    style={{
                        flex: "1 1 120px", // Grow/shrink but aim for 120px
                        maxWidth: "180px", // Prevent too much stretching
                        border: "1px solid #eef2f6",
                        borderRadius: "4px",
                        padding: "4px",
                        display: "flex",
                        alignItems: "center",
                        justifyContent: "center",
                        minWidth: "0",
                        height: "70px",
                        backgroundColor: "#fff",
                    }}
                >
                    <img
                        src={logo.src}
                        alt={logo.alt}
                        style={{
                            maxWidth: "100%",
                            maxHeight: "100%",
                            objectFit: "contain", // Stops stretching
                        }}
                    />
                </div>
            ))}
        </div>
    );
}