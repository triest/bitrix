{"version":3,"sources":["history.js"],"names":["BX","namespace","UNDO","REDO","INIT","RESOLVED","PENDING","MAX_ENTRIES_COUNT","isPlainObject","Landing","Utils","bind","fireCustomEvent","History","this","stack","commands","position","state","commandState","onStorage","window","registerBaseCommands","then","load","save","onInit","instance","getInstance","top","history","registerCommand","Command","id","undo","Action","editText","redo","editEmbed","editMap","editImage","editIcon","editLink","sortBlock","removeBlock","addBlock","editStyle","removeCard","addCard","Promise","resolve","asyncParse","str","worker","Worker","postMessage","addEventListener","event","data","asyncStringify","obj","currentPageId","Main","err","localStorage","historyData","reject","landingData","Object","keys","forEach","key","index","push","Entry","shift","Math","min","parseInt","length","catch","all","allString","clear","removePageHistory","pageId","offset","entry","command","onUpdate","onActualize","onNewBranch","removeEntities","entities","fetchEntities","items","blocks","images","item","block","prototype","canUndo","canRedo","startIndex","deleteCount","deletedEntries","splice","entries"],"mappings":"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","file":""}