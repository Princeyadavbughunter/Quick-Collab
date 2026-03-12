import React from "react";

const services = [
    {
        id: 1,
        icon: "🏷️",
        title: "Influencer Marketing",
        description:
            "Leveraging the talents of professional social media influencers and content creators, our influencer marketing experts collaborate",
    },
    {
        id: 2,
        icon: "⚙️",
        title: "Organic UGC Ads",
        description:
            "Leveraging the talents of professional social media influencers and content creators, our influencer marketing experts collaborate",
    },
    {
        id: 3,
        icon: "🔥",
        title: "Viral Ads Making",
        description:
            "Leveraging the talents of professional social media influencers and content creators, our influencer marketing experts collaborate",
    },
];

export default function Service() {
    return (
        <>
            <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap');

        /* Aileron via CDN fallback to clean sans */
        @font-face {
          font-family: 'Aileron';
          src: url('https://fonts.cdnfonts.com/s/15780/Aileron-Regular.woff') format('woff');
          font-weight: 400;
        }
        @font-face {
          font-family: 'Aileron';
          src: url('https://fonts.cdnfonts.com/s/15780/Aileron-SemiBold.woff') format('woff');
          font-weight: 600;
        }

        .services-section * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        .services-section {
          background-color: #e0e0e0;
          padding: 60px 50px;
          width: 100%;
          border-radius: 8px;
        }

        .services-heading {
          text-align: center;
          margin-bottom: 14px;
        }

        .services-heading h2 {
          font-family: 'Open Sauce One', 'Open Sans', sans-serif;
          font-size: 48px;
          color: #1a3c34;
          font-weight: 400;
          letter-spacing: 0.3px;
        }

        .services-heading h2 strong {
          font-weight: 800;
        }

        .underline-bar {
          display: flex;
          justify-content: center;
          gap: 4px;
          margin-bottom: 50px;
        }

        .underline-bar span {
          height: 6px;
          border-radius: 3px;
          display: inline-block;
        }

        .cards-grid {
          display: grid;
          grid-template-columns: repeat(3, 1fr);
          gap: 32px;
          max-width: 1300px;
          margin: 0 auto;
        }

        .service-card {
          background: #fff;
          border-radius: 24px;
          padding: 40px 32px;
          display: flex;
          flex-direction: column;
          gap: 20px;
          box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .card-header {
          display: flex;
          align-items: center;
          gap: 16px;
        }

        .icon-wrap {
          width: 56px;
          height: 56px;
          background-color: #1a5c52;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 26px;
          flex-shrink: 0;
        }

        .card-title {
          font-family: 'Open Sauce One', 'Open Sans', sans-serif;
          font-size: 24px;
          font-weight: 700;
          color: #1a3c34;
          line-height: 1.2;
        }

        .card-desc {
          font-family: 'Aileron', 'Segoe UI', sans-serif;
          font-size: 15.5px;
          color: #555;
          line-height: 1.5;
          font-weight: 400;
          max-width: 100%; /* Changed from 300px to allow it to fill card and stay in 3 lines */
        }

        @media (max-width: 900px) {
          .services-section {
            padding: 50px 20px;
          }
          .services-heading h2 {
            font-size: 36px;
          }
          .cards-grid {
            grid-template-columns: 1fr;
            gap: 24px;
          }
          .icon-wrap {
            width: 48px;
            height: 48px;
            font-size: 22px;
          }
          .card-title {
            font-size: 20px;
          }
        }
      `}</style>

            <div className="services-section">
                {/* Heading */}
                <div className="services-heading">
                    <h2>Our <strong>Services</strong></h2>
                </div>

                {/* Colorful underline */}
                <div className="underline-bar">
                    <span style={{ width: "80px", backgroundColor: "#1a5c52" }} />
                    <span style={{ width: "80px", backgroundColor: "#2bbfaa" }} />
                    <span style={{ width: "80px", backgroundColor: "#c8d832" }} />
                </div>

                {/* Cards */}
                <div className="cards-grid">
                    {services.map((service) => (
                        <div className="service-card" key={service.id}>
                            <div className="card-header">
                                <div className="icon-wrap">{service.icon}</div>
                                <span className="card-title">{service.title}</span>
                            </div>
                            <p className="card-desc">{service.description}</p>
                        </div>
                    ))}
                </div>
            </div>
        </>
    );
}