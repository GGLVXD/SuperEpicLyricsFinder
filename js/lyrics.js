async function getLyrics(){
const url = `https://echoflow.gglvxd.net/api/lyrics/?artist=${artist}&title=${title}`
  try {
    const response = await fetch(url);
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`);
    }

    const result = await response.json();
    console.log(result);
  } catch (error) {
    console.error(error.message);
  }
}