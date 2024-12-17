import React from 'react';
import { marked } from 'marked';

function Changelog({ changelogContent }) {
  const changelogSections = changelogContent.split(/(?=\[\d+\.\d+\.\d+\])/);
  return (
    <div
      className="bg-[#f1f1f1] flex justify-center items-center min-h-screen"
      id="changelog"
    >
      <div className="max-w-6xl w-full p-6 space-y-4 text-balance">
        {changelogSections.map((section, index) => (
          <div key={index} className="bg-white p-4 rounded-lg shadow-md">
            <div
              className="prose"
              dangerouslySetInnerHTML={{
                __html: marked(
                  section.replace(/(\[\d+\.\d+\.\d+\])/g, '**$1**')
                ),
              }}
            />
          </div>
        ))}
      </div>
    </div>
  );
}

export default Changelog;
