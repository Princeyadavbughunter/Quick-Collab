import React from "react";

const creators = [
  { id: 1, image: "/creater/c1.png", border: false },
  { id: 2, image: "/creater/c2.png", border: true, borderColor: "#7c3aed" },
  { id: 3, image: "/creater/c3.png", border: false },
  { id: 4, image: "/creater/c4.png", border: false },
];

const sideColors = ["#1a5c52", "#2bbfaa", "#c8d832", "#1a5c52"];

export default function OurCreators() {
  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap');

        .creators-section * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        .creators-section {
          font-family: 'Open Sans', sans-serif;
          background: #fff;
          padding: 60px 50px 70px;
          width: 100%;
        }

        /* Heading */
        .creators-heading {
          text-align: center;
          margin-bottom: 12px;
        }

        .creators-heading h2 {
          font-size: 38px;
          font-weight: 400;
          color: #1a1a1a;
          display: inline-block;
          border-bottom: 3px solid transparent;
        }

        .creators-heading h2 strong {
          font-weight: 800;
          text-decoration: underline;
          text-decoration-color: #1a1a1a;
          text-underline-offset: 4px;
        }

        .underline-bar {
          display: flex;
          justify-content: center;
          gap: 4px;
          margin-bottom: 20px;
        }

        .underline-bar span {
          height: 4px;
          border-radius: 2px;
          display: inline-block;
        }

        .creators-subtext {
          text-align: center;
          font-size: 15px;
          color: #333;
          margin-bottom: 50px;
          line-height: 1.6;
        }

        .creators-subtext strong {
          color: #1a5c52;
          font-weight: 700;
        }

        /* Cards Grid */
        .creators-grid {
          display: grid;
          grid-template-columns: repeat(4, 1fr);
          gap: 24px;
          align-items: end;
        }

        .creator-card {
          position: relative;
          border-radius: 6px;
          overflow: visible;
        }

        /* side color tag */
        .side-tag {
          position: absolute;
          left: -14px;
          top: 50%;
          transform: translateY(-50%);
          width: 14px;
          height: 100px;
          border-radius: 3px 0 0 3px;
          z-index: 2;
        }

        .card-img-wrap {
          position: relative;
          border: 4px solid #1a1a1a; /* Bezel look */
          border-radius: 28px; /* Mobile screen corners */
          overflow: hidden;
          line-height: 0;
          box-shadow: 0 10px 30px rgba(0,0,0,0.1);
          background: #000;
        }

        .card-img-wrap.has-border {
          border: 4px solid #7c3aed; /* Colored bezel */
        }

        .card-img-wrap img {
          width: 100%;
          height: 480px; /* Taller for vertical mobile view */
          object-fit: cover;
          object-position: top;
          display: block;
        }

        /* Removed taller height for second card to make them all same size */

        @media (max-width: 900px) {
          .creators-section {
            padding: 40px 20px;
          }
          .creators-heading h2 {
            font-size: 30px;
          }
          .creators-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
          }
          .card-img-wrap img {
            height: 380px; /* Scaled down for mobile */
          }
        }

        @media (max-width: 500px) {
          .creators-grid {
            grid-template-columns: 1fr;
          }
          .creator-card {
            max-width: 300px;
            margin: 0 auto;
          }
        }
      `}</style>

      <div className="creators-section">

        {/* Heading */}
        <div className="creators-heading">
          <h2>Our <strong>Creators</strong></h2>
        </div>

        {/* Colorful underline */}
        <div className="underline-bar">
          <span style={{ width: "80px", backgroundColor: "#1a5c52" }} />
          <span style={{ width: "80px", backgroundColor: "#2bbfaa" }} />
          <span style={{ width: "80px", backgroundColor: "#c8d832" }} />
        </div>

        {/* Subtext */}
        <p className="creators-subtext">
          You can shedule your call with <strong>QuickCollab</strong> in 3 simple steps and Transform your band.
        </p>

        {/* Creator Cards */}
        <div className="creators-grid">
          {creators.map((creator, index) => (
            <div className="creator-card" key={creator.id}>
              {/* Side color tag */}
              <div
                className="side-tag"
                style={{ backgroundColor: sideColors[index] }}
              />
              <div className={`card-img-wrap${creator.border ? " has-border" : ""}`}>
                <img src={creator.image} alt={`Creator ${creator.id}`} />
              </div>
            </div>
          ))}
        </div>

      </div>
    </>
  );
}