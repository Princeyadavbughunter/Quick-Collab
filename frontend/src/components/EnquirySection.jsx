import React, { useState } from "react";

export default function EnquirySection() {
  const [agreed, setAgreed] = useState(false);
  const [form, setForm] = useState({ fullName: "", email: "", mobile: "" });

  const handleChange = (e) => {
    setForm({ ...form, [e.target.name]: e.target.value });
  };

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap');

        .enquiry-section * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        .enquiry-section {
          font-family: 'Open Sans', sans-serif;
          background: linear-gradient(135deg, #1ab8b8 0%, #2bbfaa 30%, #7ed957 70%, #a8e63d 100%);
          padding: 70px 5%;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-wrap: wrap;
          gap: 60px;
          min-height: 400px;
          margin-top: 100px;
        }

        /* Left Text */
        .enquiry-left {
          flex: 1;
          max-width: 520px;
        }

        .enquiry-left h2 {
          font-size: 52px;
          font-weight: 800;
          color: #fff;
          line-height: 1.15;
          margin-bottom: 20px;
          text-align: center;
        }

        .enquiry-left p {
          font-size: 15px;
          color: #fff;
          line-height: 1.7;
          font-weight: 400;
          text-align: center;
        }

        .enquiry-left p strong {
          font-weight: 700;
        }

        /* Right Form Box */
        .enquiry-form-box {
          background: rgba(80, 120, 140, 0.55);
          backdrop-filter: blur(8px);
          border-radius: 14px;
          padding: 28px 28px 32px;
          width: 320px;
          flex-shrink: 0;
        }

        .form-title {
          background: #1a8a8a;
          color: #fff;
          font-size: 17px;
          font-weight: 700;
          padding: 10px 24px;
          border-radius: 30px;
          display: inline-block;
          margin-bottom: 22px;
        }

        .form-group {
          margin-bottom: 16px;
        }

        .form-group label {
          display: block;
          font-size: 13px;
          color: #fff;
          margin-bottom: 6px;
          font-weight: 500;
        }

        .form-group input {
          width: 100%;
          padding: 10px 14px;
          border-radius: 8px;
          border: none;
          background: #fff;
          font-size: 14px;
          color: #333;
          outline: none;
          font-family: 'Open Sans', sans-serif;
        }

        .mobile-input {
          display: flex;
          align-items: center;
          background: #fff;
          border-radius: 8px;
          overflow: hidden;
          padding: 0 14px 0 10px;
          gap: 8px;
        }

        .mobile-flag {
          font-size: 18px;
          flex-shrink: 0;
        }

        .mobile-code {
          font-size: 14px;
          color: #333;
          flex-shrink: 0;
        }

        .mobile-input input {
          border: none;
          outline: none;
          padding: 10px 0;
          font-size: 14px;
          flex: 1;
          font-family: 'Open Sans', sans-serif;
        }

        .checkbox-row {
          display: flex;
          align-items: flex-start;
          gap: 8px;
          margin-bottom: 18px;
          margin-top: 4px;
        }

        .checkbox-row input[type="checkbox"] {
          margin-top: 3px;
          flex-shrink: 0;
          width: 14px;
          height: 14px;
          cursor: pointer;
        }

        .checkbox-row span {
          font-size: 11.5px;
          color: #e8f8f8;
          line-height: 1.6;
        }

        .checkbox-row a {
          color: #fff;
          text-decoration: underline;
          font-weight: 600;
        }

        .submit-btn {
          width: 100%;
          padding: 12px;
          background: linear-gradient(90deg, #1a8a8a, #2bbfaa);
          color: #fff;
          font-size: 16px;
          font-weight: 700;
          border: none;
          border-radius: 30px;
          cursor: pointer;
          font-family: 'Open Sans', sans-serif;
          letter-spacing: 0.5px;
          transition: opacity 0.2s;
        }

        .submit-btn:hover {
          opacity: 0.9;
        }

        @media (max-width: 900px) {
          .enquiry-section {
            flex-direction: column;
            padding: 50px 24px;
            text-align: center;
            gap: 40px;
            margin-top: 60px;
          }
          .enquiry-left {
            max-width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
          }
          .enquiry-left h2 {
            font-size: 34px !important;
            text-align: center !important;
          }
          .enquiry-left p {
            font-size: 16px !important;
            text-align: center !important;
            white-space: normal !important;
          }
          .enquiry-form-box {
            width: 100%;
            max-width: 360px;
          }
        }
      `}</style>

      <div className="enquiry-section">

        {/* Left */}
        <div className="enquiry-left" style={{ maxWidth: "600px", minWidth: "320px" }}>
          <h2 style={{ fontFamily: "'Open Sauce One', sans-serif", fontSize: "48px", fontWeight: "800", textAlign: "left", lineHeight: "1.1" }}>
            Let's Transform your Brand to<br />
            Next Level
          </h2>
          <p style={{ textAlign: "left", fontSize: "17px", marginTop: "15px" }}>
            You can schedule your call with <strong>QuickCollab</strong> in 3 simple steps and Transform your brand.
          </p>
        </div>

        {/* Right Form */}
        <div className="enquiry-form-box">
          <div className="form-title">Enquiry Form</div>

          <div className="form-group">
            <label>Full Name*</label>
            <input
              type="text"
              name="fullName"
              value={form.fullName}
              onChange={handleChange}
              placeholder=""
            />
          </div>

          <div className="form-group">
            <label>Email Address*</label>
            <input
              type="email"
              name="email"
              value={form.email}
              onChange={handleChange}
              placeholder=""
            />
          </div>

          <div className="form-group">
            <label>Mobile Number*</label>
            <div className="mobile-input">
              <span className="mobile-flag">🇮🇳</span>
              <span className="mobile-code">+91</span>
              <input
                type="tel"
                name="mobile"
                value={form.mobile}
                onChange={handleChange}
                placeholder=""
              />
            </div>
          </div>

          <div className="checkbox-row">
            <input
              type="checkbox"
              checked={agreed}
              onChange={() => setAgreed(!agreed)}
            />
            <span>
              I have read, understood &amp; accepted the{" "}
              <a href="#">Privacy Policy</a>, <a href="#">T&amp;C</a> &amp;{" "}
              <a href="#">Disclaimer</a> of this website.
            </span>
          </div>

          <button className="submit-btn">Submit</button>
        </div>

      </div>
    </>
  );
}