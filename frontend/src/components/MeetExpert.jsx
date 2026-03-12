import React from "react";

const experts = [
    { id: 1, image: "Expert.png", role: "Campaign Strategist", name: "VIVEK SARRAF" },
    { id: 2, image: "Expert.png", role: "Campaign Strategist", name: "VIVEK SARRAF" },
    { id: 3, image: "Expert.png", role: "Campaign Strategist", name: "VIVEK SARRAF" },
];

export default function MeetExperts() {
    return (
        <>
            <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap');

        .meet-section * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        .meet-section {
          font-family: 'Open Sans', sans-serif;
          padding: 50px 0 50px 40px; /* Removed right padding */
          background: #fff;
          width: 100%;
          overflow-x: hidden;
        }

        .meet-grid {
          display: grid;
          grid-template-columns: repeat(3, 1fr) 2.2fr; /* Stretched right box even more */
          gap: 24px;
          align-items: stretch;
          width: 100%;
          padding: 0; /* Removed grid padding to touch the edge */
        }

        /* Expert Card */
        .expert-card {
          border: 2px solid #2bbfaa;
          border-radius: 12px;
          overflow: hidden;
          display: flex;
          flex-direction: column;
          box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .expert-img-wrap {
          flex: 1;
          overflow: hidden;
          background: #f5f5f5;
        }

        .expert-img-wrap img {
          width: 100%;
          height: 320px; /* Slightly taller images */
          object-fit: cover;
          object-position: top;
          display: block;
        }

        .expert-footer {
          background: #fff;
          padding: 16px;
          position: relative;
        }

        .footer-bar {
          display: flex;
          height: 6px;
          margin-bottom: 12px;
        }

        .bar-dark  { background: #1a5c52; flex: 3; }
        .bar-green { background: #c8d832; flex: 1; }

        .expert-role {
          font-family: 'Open Sauce One', sans-serif;
          font-size: 13px;
          color: #2bbfaa;
          font-weight: 600;
          text-transform: capitalize;
          letter-spacing: 0.3px;
          margin-bottom: 4px;
        }

        .expert-name {
          font-family: 'Open Sauce One', sans-serif;
          font-size: 18px;
          font-weight: 800;
          color: #1a3c34;
          letter-spacing: 1px;
          text-transform: uppercase;
        }

        /* Right Dark Box */
        .meet-info {
          background: #1a5c52;
          border-radius: 0; /* Sharp rectangle as requested */
          padding: 60px 48px; /* Increased padding */
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center; /* Center horizontally */
          text-align: center; /* Center text lines */
        }

        .meet-info h2 {
          font-family: 'Open Sauce One', sans-serif;
          font-size: 42px; /* Bigger heading */
          font-weight: 800;
          color: #fff;
          line-height: 1.2;
          margin-bottom: 24px;
        }

        .meet-info p {
          font-family: 'Open Sauce One', sans-serif;
          font-size: 17px; /* Bigger description */
          color: #a8d5c8;
          line-height: 1.6;
          font-weight: 400;
          max-width: 500px; /* Constrain width to force 3 lines */
          margin: 0 auto;
        }

        @media (max-width: 900px) {
          .meet-section {
            padding: 40px 20px;
          }
          .meet-grid {
            grid-template-columns: 1fr;
            gap: 20px;
          }
          .meet-info {
            order: -1; /* Stack info box at the top */
            padding: 40px 24px;
            border-radius: 12px;
          }
          .meet-info h2 {
            font-size: 32px;
          }
          .expert-card {
            max-width: 400px;
            margin: 0 auto;
            width: 100%;
          }
        }

        @media (min-width: 600px) and (max-width: 900px) {
          .meet-grid {
            grid-template-columns: repeat(2, 1fr);
          }
          .meet-info {
            grid-column: span 2;
          }
        }
      `}</style>

            <div className="meet-section">
                <div className="meet-grid">

                    {/* Expert Cards */}
                    {experts.map((expert) => (
                        <div className="expert-card" key={expert.id}>
                            <div className="expert-img-wrap">
                                <img src={expert.image} alt={expert.name} />
                            </div>
                            <div className="expert-footer">
                                <div className="footer-bar">
                                    <div className="bar-dark" />
                                    <div className="bar-green" />
                                </div>
                                <div className="expert-role">{expert.role}</div>
                                <div className="expert-name">{expert.name}</div>
                            </div>
                        </div>
                    ))}

                    {/* Right Info Box */}
                    <div className="meet-info">
                        <h2>Meet the experts</h2>
                        <p>
                            Leveraging the talents of professional social media influencers and content creators, our influencer marketing experts collaborate
                        </p>
                    </div>

                </div>
            </div>
        </>
    );
}