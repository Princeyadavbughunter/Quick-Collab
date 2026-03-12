import React, { useState } from "react";

const faqs = [
    { id: 1, question: "How do I get started with you?", answer: "Getting started is simple! Contact us through our enquiry form, schedule a call, and our team will guide you through the onboarding process in 3 easy steps." },
    { id: 2, question: "Why should I choose strategiX Media over other agencies?", answer: "We offer data-driven influencer marketing with proven results, transparent reporting, and a dedicated team of experts who truly understand your brand goals." },
    { id: 3, question: "What does \"CTR- based UGC Marketing Agency\" mean?", answer: "CTR-based means we focus on Click-Through Rate performance. Every UGC (User Generated Content) campaign we run is optimized to drive real clicks, engagement, and conversions for your brand." },
];

export default function FAQSection() {
    const [openId, setOpenId] = useState(null);

    const toggle = (id) => setOpenId(openId === id ? null : id);

    return (
        <>
            <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap');

        .faq-section * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        .faq-section {
          font-family: 'Open Sans', sans-serif;
          background: #e0e0e0;
          padding: 60px 50px 80px;
          width: 100%;
          border-radius: 8px;
          margin-top: 100px; /* Added white space above the section */
        }

        .faq-heading {
          text-align: center;
          font-size: 38px;
          font-weight: 800;
          color: #1a1a1a;
          margin-bottom: 12px;
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

        .faq-subtext {
          text-align: center;
          font-size: 15px;
          color: #1a5c52;
          margin-bottom: 40px;
          line-height: 1.6;
        }

        .faq-subtext strong {
          font-weight: 700;
        }

        .faq-list {
          display: flex;
          flex-direction: column;
          gap: 12px;
        }

        .faq-item {
          background: #f4f6f8;
          border-radius: 10px;
          overflow: hidden;
        }

        .faq-question {
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 22px 24px;
          background: transparent;
          border: none;
          cursor: pointer;
          text-align: left;
          font-family: 'Open Sans', sans-serif;
          gap: 16px;
        }

        .faq-question span {
          font-size: 16px;
          font-weight: 700;
          color: #1a1a1a;
          line-height: 1.4;
        }

        .faq-icon {
          width: 32px;
          height: 32px;
          border-radius: 50%;
          background: #1a1a1a;
          color: #fff;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 22px;
          font-weight: 300;
          flex-shrink: 0;
          line-height: 1;
          transition: background 0.2s;
        }

        .faq-item.open .faq-icon {
          background: #1a5c52;
        }

        .faq-answer {
          padding: 0 24px;
          max-height: 0;
          overflow: hidden;
          transition: max-height 0.3s ease, padding 0.3s ease;
          font-size: 14px;
          color: #555;
          line-height: 1.75;
        }

        .faq-item.open .faq-answer {
          max-height: 200px;
          padding: 0 24px 20px;
        }

        @media (max-width: 900px) {
          .faq-section {
            padding: 50px 20px;
            margin-top: 60px;
          }
          .faq-heading {
            font-size: 32px;
          }
          .faq-question span {
            font-size: 15px;
          }
          .faq-icon {
            width: 28px;
            height: 28px;
            font-size: 18px;
          }
        }
      `}</style>

            <div className="faq-section">

                <h2 className="faq-heading">FAQs</h2>

                <div className="underline-bar">
                    <span style={{ width: "80px", backgroundColor: "#1a5c52" }} />
                    <span style={{ width: "80px", backgroundColor: "#2bbfaa" }} />
                    <span style={{ width: "80px", backgroundColor: "#c8d832" }} />
                </div>

                <p className="faq-subtext">
                    You can shedule your call with <strong>QuickCollab</strong> in 3 simple steps and Transform your band.
                </p>

                <div className="faq-list">
                    {faqs.map((faq) => (
                        <div className={`faq-item${openId === faq.id ? " open" : ""}`} key={faq.id}>
                            <button className="faq-question" onClick={() => toggle(faq.id)}>
                                <span>{faq.id}. {faq.question}</span>
                                <div className="faq-icon">
                                    {openId === faq.id ? "−" : "+"}
                                </div>
                            </button>
                            <div className="faq-answer">{faq.answer}</div>
                        </div>
                    ))}
                </div>

            </div>
        </>
    );
}