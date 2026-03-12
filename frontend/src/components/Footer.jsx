import React from "react";

const quickLinks = [
    { id: 1, label: "Home", href: "#" },
    { id: 2, label: "About us", href: "#" },
    { id: 3, label: "Our Work", href: "#" },
    { id: 4, label: "Join as Creator", href: "#" },
];

export default function Footer() {
    return (
        <>
            <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap');

        .footer * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        .footer {
          font-family: 'Poppins', sans-serif;
          background: #0d4a3e;
          width: 100%;
          position: relative;
          overflow: hidden;
          margin-top: 120px; /* Added white space above the footer */
        }

        .footer-top {
          display: flex;
          justify-content: flex-start;
          gap: 400px; /* Reduced gap since left side is now shifted more towards the middle */
          align-items: flex-start;
          padding: 60px 80px 20px 280px; /* Further increased left padding to move text towards middle */
        }

        /* Left */
        .footer-left {
          max-width: 420px;
          padding-top: 100px; /* Shifted text slightly downwards */
        }

        .footer-left p {
          font-size: 18px; /* Larger font size */
          color: #cce8e2;
          line-height: 1.6;
          font-weight: 600; /* Bolder weight */
        }

        /* Right Quick Links */
        .footer-right h3 {
          font-size: 24px; /* Slightly larger */
          font-weight: 800; /* Extra bold */
          color: #fff;
          margin-bottom: 24px;
        }

        .footer-links {
          list-style: none;
          display: flex;
          flex-direction: column;
          gap: 14px;
        }

        .footer-links li a {
          display: flex;
          align-items: center;
          gap: 12px;
          font-size: 18px; /* Larger links */
          color: #fff;
          text-decoration: none;
          font-weight: 500; /* Bolder links */
          transition: color 0.2s;
        }

        .footer-links li a:hover {
          color: #c8d832;
        }

        .footer-links li a .arrow {
          font-size: 20px;
          font-weight: 700;
          color: #fff;
        }

        /* Big watermark text */
        .footer-watermark {
          font-size: clamp(80px, 14vw, 160px);
          font-weight: 900;
          color: rgba(255,255,255,0.07);
          line-height: 1;
          padding: 0 40px;
          letter-spacing: -2px;
          user-select: none;
          margin-top: 10px;
        }

        /* Bottom bar */
        .footer-bottom {
          background: #0a3d33;
          text-align: center;
          padding: 16px 20px;
          font-size: 14px;
          color: #cce8e2;
          font-weight: 400;
        }

        @media (max-width: 900px) {
          .footer-top {
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 50px 24px;
            gap: 40px;
          }
          .footer-left {
            max-width: 100%;
            padding-top: 0;
          }
          .footer-left p br {
            display: none; /* Let text flow naturally */
          }
          .footer-right h3 {
            margin-bottom: 20px;
          }
          .footer-links {
            align-items: center;
          }
          .footer-watermark {
            text-align: center;
            padding: 0 20px;
          }
        }
      `}</style>

            <footer className="footer">

                {/* Top Row */}
                <div className="footer-top">

                    {/* Left: Description */}
                    <div className="footer-left">
                        <p>
                            Quick Collab is India's First CTR-based UGC and<br />
                            Influencer Marketing Agency based in Gurgaon..
                        </p>
                    </div>

                    {/* Right: Quick Links */}
                    <div className="footer-right">
                        <h3>Quick Links</h3>
                        <ul className="footer-links">
                            {quickLinks.map((link) => (
                                <li key={link.id}>
                                    <a href={link.href}>
                                        <span className="arrow">→</span>
                                        {link.label}
                                    </a>
                                </li>
                            ))}
                        </ul>
                    </div>

                </div>

                {/* Watermark */}
                <div className="footer-watermark">Quick Collab</div>

                {/* Bottom copyright */}
                <div className="footer-bottom">
                    © 2026 QuickCollab | All Rights Reserved
                </div>

            </footer>
        </>
    );
}