function Recommmandation() {
  const currentMonth = new Date().getMonth();
  const isPring = currentMonth >= 2 && currentMonth <= 5;
  if (!isPring) {
    return <div>Ce n est pas le temps de rempoter</div>;
  }
  return <div>C'est le temps de rempoter !</div>;
  /**
  return (
    <div>
      {isPring ? (
        <div> c est le printemps, rempoter</div>
      ) : (
        <div>Ce n est pas le temps de rempoter</div>
      )}
    </div> 
  );
   **/
}

export default Recommmandation;
